@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}"/>
@stop

@section('content')

    <!-- Inicio de Componentização da Página Index -->
    <x-pages.index paginate="{{$db->links()}}">
        @slot('body')
            <x-conteiner>

                <div class="pb-3">
                    <form method="get" class="row">
                        <x-form.input col="11" label="Cidades" id="searchName" placeholder="Pesquisa por Cidades" value="{{$search['searchName'] ?? ''}}"/>
                        <x-button.buttonSearch col="1"/>
                    </form>
                </div>

                <x-table.table>
                    @slot('thead')
                        <tr>
                            <th class="col-1 text-center">IBGE</th>
                            <th>Municipios</th>
                            <th class="col-2">Estados</th>
                            <th class="col-1 text-center">Status</th>
                        </tr>
                    @endslot

                    @slot('tbody')
                        @foreach ($db as $item)
                            <tr>
                                <td class="text-center">{{$item->cod_municipio_ibge}}</td>
                                <td>{{$item->no_municipio}}</td>
                                <td>{{$item->RegionStates->no_estado}}</td>
                                <td class="text-center">
                                    <x-button.buttonStatus condition="{{$item->st_municipio}}" route="{{route('cities.status',['city'=>$item->id])}}" name="st_municipio"/>
                                </td>
                            </tr>
                        @endforeach
                    @endslot
                </x-table.table>
            </x-conteiner>
        @endslot
    </x-pages.index>
@stop
