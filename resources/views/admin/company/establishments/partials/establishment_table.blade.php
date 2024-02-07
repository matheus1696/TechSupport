<!-- Components Table -->
<x-table.table :db="$db">
    <!-- Components THead -->
    @slot('thead')
        <tr>
            <th>CNES</th>
            <th>Estabelecimento</th>
            <th>Bairro</th>
            <th>Nivel de Atenção</th>
            <th>Status</th>
            <th></th>
        </tr>
    @endslot

    <!-- Components TBody -->
    @slot('tbody')
        @foreach ($db as $item)
            <tr>
                <td class="text-center">{{$item->code}}</td>
                <td class="text-center">{{$item->title}}</td>
                <td class="text-center">{{$item->district}}</td>
                <td class="text-center">{{$item->FinancialBlocks->title}}</td>
                <td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}" name="status"
                        route="{{route('establishments.status',['establishment'=>$item->id])}}" />
                </td>
                <td class="text-center">
                    <x-button.minButtonModalInfo id="EstablishmentsModel{{$item->id}}" title="Estabelecimento de Saúde">
                        <div class="row">
                            <p class="col-lg-2"><strong>CNES: </strong>{{$item->code ?? ""}}</p>
                            <p class="col-lg-10"><strong>Unidade: </strong>{{$item->title ?? ""}}</p>
                            <p class="col-lg-12">
                                <strong>Endereço: </strong>
                                {{$item->address ?? ""}},{{$item->number ?? ""}}, {{$item->district ?? ""}}, {{$item->RegionCities->city ?? ""}} - {{$item->RegionCities->RegionStates->state ?? ""}}
                            </p>
                            <p class="col-lg-12"><strong>Tipo de Estabelecimento:
                                </strong>{{$item->TypeEstablishments->title ?? ""}}</p>
                            <p class="col-lg-12"><strong>Bloco Financeiro:
                                </strong>{{$item->FinancialBlocks->title ?? ""}}</p>
                        </div>
                        <hr>
                        <div>
                            <p class="text-center"><strong>Lista de Contatos</strong></p>
                            <div class="mt-3">
                                <x-table.table>
                                    @slot('thead')
                                        <tr class="text-center">
                                            <th class="col-6">Departamento</th>
                                            <th class="col-3">Telefone</th>
                                            <th class="col-3">Ramal</th>
                                        </tr>
                                    @endslot

                                    @slot('tbody')
                                        @foreach ($dbLists as $dbList)
                                            @if($item->id === $dbList->establishment_id)
                                            <tr class="text-center">
                                                <td>{{$dbList->department}}</td>
                                                <td>{{$dbList->contact}}</td>
                                                <td>{{$dbList->extension}}</td>
                                            </tr>
                                            @endif
                                        @endforeach
                                    @endslot
                                </x-table.table>
                            </div>
                        </div>
                    </x-button.minButtonModalInfo>
                    <x-button.minButtonShow route="{{route('establishments.show',['establishment'=>$item->id])}}" />
                    <x-button.minButtonEdit route="{{route('establishments.edit',['establishment'=>$item->id])}}" />
                </td>
            </tr>
        @endforeach
    @endslot
</x-table.table>