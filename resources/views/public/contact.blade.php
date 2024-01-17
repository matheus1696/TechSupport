@extends('adminlte::page', ['options.auto_show_new_tab	' => 'false'])

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}"/>
@stop

@section('content')

    <!-- Inicio de Componentização Page Index -->
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
                            <th class="col-6 col-md-4 col-lg-2 text-center">Contato</th>
                            <th class="text-center">Ramais</th>
                        </tr>
                    @endslot

                    @slot('tbody')
                        @foreach ($dbEstablishments as $item)
                            <tr>
                                <td>{{$item->no_unidade}}</td>
                                <td class="d-none d-lg-table-cell">{{$item->AttentionLevels->no_nivel_atencao}}</td>
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
                                    <x-button.minButtonModal id="EstablishmentsModel{{$item->id}}" title="{{$item->no_unidade}}">
                                        <div>
                                            <p class="text-center"><strong>Lista de Contatos</strong></p>
                                            <div class="mt-3">
                                                <x-table.table>
                                                    @slot('thead')
                                                        <tr class="text-center">
                                                            <th class="col-3 text-center">Departamento</th>
                                                            <th class="col-4 text-center">Telefone</th>
                                                            <th class="col-2 text-center">Ramal</th>
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
@stop
