
    <x-pages.index paginate="{{$dbEstablishments->links()}}">
        @slot('body')
            <x-conteiner>

                <div class="pb-3">
                    <form method="get" class="row">
                        <x-form.input col="11" label="Unidade" id="searchName" placeholder="Pesquisa por Unidade" value="{{$search['searchName'] ?? ''}}"/>
                        <x-button.buttonSearch/>
                    </form>
                </div>

                <x-table.table>
                    @slot('thead')
                        <tr>
                            <th>Unidade</th>
                            <th class="d-none d-lg-table-cell">Nivel de Atenção</th>
                            <th class="text-center col-6 col-md-4 col-lg-2">Contato</th>
                            <th class="text-center">Ramais</th>
                        </tr>
                    @endslot

                    @slot('tbody')
                        @foreach ($dbEstablishments as $item)
                            <tr>
                                <td>{{$item->establishment}}</td>
                                <td class="d-none d-lg-table-cell">{{$item->AttentionLevels->attention_level}}</td>
                                <td class="text-center">
                                    @foreach ($dbLists as $dbList)
                                        @if ($dbList->estabelecimento_id == $item->id)
                                            @if ($dbList->con_principal == "Principal")
                                                @if ($dbList->con_unidade != "(81) 3101-0000")
                                                    {{$dbList->con_unidade}}
                                                @endif
                                            @endif
                                        @endif
                                    @endforeach
                                </td>
                                <td class="text-center">
                                    <x-button.minButtonModal id="EstablishmentsModel{{$item->id}}" title="{{$item->establishment}}">
                                        <div>
                                            <p class="text-center"><strong>Lista de Contatos</strong></p>
                                            <div class="mt-3">
                                                <x-table.table>
                                                    @slot('thead')
                                                        <tr class="text-center">
                                                            <th class="text-center col-3">Departamento</th>
                                                            <th class="text-center col-4">Telefone</th>
                                                            <th class="text-center col-2">Ramal</th>
                                                        </tr>
                                                    @endslot
                                                    @slot('tbody')
                                                        @foreach ($dbLists as $dbList)
                                                            @if($item->id === $dbList->estabelecimento_id)
                                                                <tr>
                                                                    <td class="text-center">{{$dbList->dp_unidade}}</td>
                                                                    <td class="text-center">{{$dbList->con_unidade}}</td>
                                                                    <td class="text-center">{{$dbList->con_unidade_2}}</td>
                                                                </tr>
                                                            @endif
                                                        @endforeach
                                                    @endslot
                                                </x-table.table>
                                            </div>
                                        </div>
                                    </x-button.minButtonModal>
                                </td>
                            </tr>
                        @endforeach
                    @endslot
                </x-table.table>

            </x-conteiner>
        @endslot
    </x-pages.index>