@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}" />
@stop

@section('content')

    <!-- Inicio de Componentização da Página Index -->
    <x-pages.index paginate="{{$db->links()}}">
        @slot('body')
            <x-conteiner>

                <div class="pb-3">
                    <form method="get" class="row">
                        <x-form.input col="11" label="Paises" id="searchName" placeholder="Pesquisa por Paises" value="{{$search['searchName'] ?? ''}}"/>
                        <x-button.buttonSearch/>
                    </form>
                </div>

                <x-table.table>
                    @slot('thead')
                        <tr>
                            <th class="col-1 text-center">Código</th>
                            <th class="col-1 text-center">Siglas</th>
                            <th>Pais</th>
                            <th>Pais em Inglês</th>
                            <th>DDI</th>
                            <th class="col-1 text-center">Status</th>
                        </tr>
                    @endslot

                    @slot('tbody')
                        @foreach ($db as $item)
                            <tr>
                                <td class="text-center">{{$item->cod_pais_iso}}</td>
                                <td class="text-center">{{$item->sg_pais_3}}</td>
                                <td>{{$item->no_pais}}</td>
                                <td>{{$item->no_pais_ingles}}</td>
                                <td class="text-center">{{$item->cod_pais_ddi}}</td>
                                <td class="text-center">
                                    <x-button.buttonStatus condition="{{$item->st_pais}}" route="{{route('countries.status',['country'=>$item->id])}}" name="st_pais"/>
                                </td>
                            </tr>
                        @endforeach
                    @endslot
                </x-table.table>

            </x-conteiner>
        @endslot
    </x-pages.index>
@stop
