<!-- Components Table -->
<x-table.table :db="$db">
    <!-- Components THead -->
    @slot('thead')
        <x-table.th>Código</x-table.th>
        <x-table.th>Estabelecimento</x-table.th>
        <x-table.th>Bairro</x-table.th>
        <x-table.th>Bloco Financeiro</x-table.th>
        <x-table.th class="w-28">Status</x-table.th>
        <x-table.th class="w-40"></x-table.th>
    @endslot

    <!-- Components TBody -->
    @slot('tbody')
        @foreach ($db as $item)
            <x-table.tr>
                <x-table.td>{{$item->code}}</x-table.td>
                <x-table.td>{{$item->title}}</x-table.td>
                <x-table.td>{{$item->district}}</x-table.td>
                <x-table.td>{{$item->FinancialBlocks->title}}</x-table.td>
                <x-table.td>
                    <x-button.buttonStatus condition="{{$item->status}}" name="status"
                        route="{{route('establishments.status',['establishment'=>$item->id])}}" />
                </x-table.td>
                <x-table.td>
                    <x-button.minButtonModalInfo id="EstablishmentsModel{{$item->id}}" title="Estabelecimento de Saúde">
                        <div class="flex flex-col gap-3 mb-3">
                            <p><strong>CNES: </strong>{{$item->code ?? ""}}</p>
                            <p><strong>Estabelecimento: </strong>{{$item->title ?? ""}}</p>
                            <p><strong>Nome Fantasia: </strong>{{$item->surname ?? ""}}</p>
                            <p>
                                <strong>Endereço: </strong>
                                {{$item->address ?? ""}},{{$item->number ?? ""}}, {{$item->district ?? ""}}, {{$item->RegionCities->city ?? ""}} - {{$item->RegionCities->RegionStates->state ?? ""}}
                            </p>
                            <p><strong>Tipo de Estabelecimento:</strong>{{$item->TypeEstablishments->title ?? ""}}</p>
                            <p><strong>Bloco Financeiro:</strong>{{$item->FinancialBlocks->title ?? ""}}</p>
                        </div>
                        <hr>
                        <div>
                            <p class="mt-3 text-center"><strong>Lista de Contatos</strong></p>
                            <div class="mt-3">
                                <x-table.table>
                                    @slot('thead')
                                        <x-table.tr class="text-center">
                                            <x-table.th>Departamento</x-table.th>
                                            <x-table.th>Telefone</x-table.th>
                                            <x-table.th>Ramal</x-table.th>
                                        </x-table.tr>
                                    @endslot

                                    @slot('tbody')
                                        @foreach ($dbLists as $dbList)
                                            @if($item->id === $dbList->establishment_id)
                                            <x-table.tr class="text-center">
                                                <x-table.td>{{$dbList->department}}</x-table.td>
                                                <x-table.td>{{$dbList->contact}}</x-table.td>
                                                <x-table.td>{{$dbList->extension}}</x-table.td>
                                            </x-table.tr>
                                            @endif
                                        @endforeach
                                    @endslot
                                </x-table.table>
                            </div>
                        </div>
                    </x-button.minButtonModalInfo>
                    <x-button.minButtonShow route="{{route('establishments.show',['establishment'=>$item->id])}}" />
                    <x-button.minButtonEdit route="{{route('establishments.edit',['establishment'=>$item->id])}}" />
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>