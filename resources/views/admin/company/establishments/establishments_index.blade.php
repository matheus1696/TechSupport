<x-pages.index paginate="{{$db->links()}}">
    @slot('body')
    <x-conteiner>

        <div class="pb-3">
            <form method="get" class="row">
                <x-form.input col="2" label="CNES" id="searchCod" placeholder="Pesquisa por CNES"
                    value="{{$search['searchCod'] ?? ''}}" />
                <x-form.input col="9" label="Unidade" id="searchName" placeholder="Pesquisa por Unidade"
                    value="{{$search['searchName'] ?? ''}}" />
                <x-button.buttonSearch />
            </form>
        </div>

        <x-table.table>
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

            @slot('tbody')
            @foreach ($db as $item)
            <tr>
                <td class="text-center">{{$item->code}}</td>
                <td>{{$item->establishment}}</td>
                <td>{{$item->district}}</td>
                <td>{{$item->AttentionLevels->attention_level}}</td>
                <td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}" name="status"
                        route="{{route('establishments.status',['establishment'=>$item->id])}}" />
                </td>
                <td class="text-center">
                    <x-button.minButtonModal id="EstablishmentsModel{{$item->id}}" title="Estabelecimento de Saúde">
                        <div class="row">
                            <p class="col-lg-2"><strong>CNES: </strong>{{$item->code ?? ""}}</p>
                            <p class="col-lg-10"><strong>Unidade: </strong>{{$item->establishment ?? ""}}</p>
                            <p class="col-lg-12"><strong>Endereço: </strong>{{$item->logradouro ?? ""}},
                                {{$item->number ?? ""}}, {{$item->district ?? ""}},
                                {{$item->RegionCities->city ?? ""}} -
                                {{$item->RegionCities->RegionStates->state ?? ""}}</p>
                            <p class="col-lg-10"><strong>Unidade: </strong>{{$item->establishment ?? ""}}</p>
                            <p class="col-lg-12"><strong>Tipo de Estabelecimento:
                                </strong>{{$item->TypeEstablishments->type_establishment ?? ""}}</p>
                            <p class="col-lg-12"><strong>Nivel de Atenção:
                                </strong>{{$item->AttentionLevels->attention_level ?? ""}}</p>
                        </div>
                        <hr>
                        <div>
                            <p class="text-center"><strong>Lista de Contatos</strong></p>
                            <div>
                                <x-form.form method="create" route="{{route('establishments.contact.store')}}"
                                    btnBack="{{route('establishments.index')}}">
                                    <input type="hidden" name="estabelecimento_id" value="{{$item->id}}">
                                    <x-form.input col="4" label="Setor" id="dp_unidade" required="required" />
                                    <x-form.input col="3" type="tel" label="Telefone" id="con_unidade" />
                                    <x-form.input col="2" type="number" label="Ramal" id="con_unidade_2" />
                                    <x-form.select col="3" label="Contato Principal" id="con_principal">
                                        <option value="Principal">Principal</option>
                                        <option selected value="Interno">Interno</option>
                                    </x-form.select>
                                </x-form.form>
                            </div>
                            <div class="mt-3">
                                <x-table.table>
                                    @slot('thead')
            <tr class="text-center">
                <th class="col-6">Departamento</th>
                <th class="col-2">Telefone</th>
                <th class="col-2">Ramal</th>
                <th class="col-2"></th>
            </tr>
            @endslot
            @slot('tbody')
            @foreach ($dbLists as $dbList)
            @if($item->id === $dbList->estabelecimento_id)
            <tr class="text-center">
                <td>{{$dbList->dp_unidade}}</td>
                <td>{{$dbList->con_unidade}}</td>
                <td>{{$dbList->con_unidade_2}}</td>
                <td class="text-center">
                    <x-button.minButtonEdit
                        route="{{route('establishments.contact.edit',['establishment'=>$dbList->estabelecimento_id, 'contact'=>$dbList->id])}}">
                    </x-button.minButtonEdit>
                    <x-button.minButtonDelete
                        route="{{route('establishments.contact.destroy',['contact'=>$dbList->id])}}">
                    </x-button.minButtonDelete>
                </td>
            </tr>
            @endif
            @endforeach
            @endslot
        </x-table.table>
        </div>
        </div>
        </x-button.minButtonModal>
        <x-button.minButtonEdit route="{{route('establishments.edit',['establishment'=>$item->id])}}" />
        </td>
        </tr>
        @endforeach
        @endslot
        </x-table.table>

    </x-conteiner>
    @endslot
</x-pages.index>