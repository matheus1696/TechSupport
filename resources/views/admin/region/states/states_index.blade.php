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
                        <x-form.input col="11" label="Estados" id="searchName" placeholder="Pesquisa por Estados" value="{{$search['searchName'] ?? ''}}"/>
                        <x-button.buttonSearch/>
                    </form>
                </div>

                <x-table.table>
                    @slot('thead')
                        <tr>
                            <th class="col-1 text-center">UF</th>
                            <th class="col-1 text-center">Sigla</th>
                            <th>Estados</th>
                            <th class="col-2">Paises</th>
                            <th class="col-1 text-center">Status</th>
                        </tr>
                    @endslot

                    @slot('tbody')
                        @foreach ($db as $item)
                            <tr>
                                <td class="text-center">{{$item->cod_estado_uf}}</td>
                                <td class="text-center">{{$item->sg_estado}}</td>
                                <td>{{$item->no_estado}}</td>
                                <td>{{$item->RegionCountries->no_pais}}</td>
                                <td class="text-center">
                                    <x-button.buttonStatus condition="{{$item->st_estado}}" route="{{route('states.status',['state'=>$item->id])}}" name="st_estado"/>
                                </td>
                            </tr>
                        @endforeach
                    @endslot
                </x-table.table>

            </x-conteiner>
        @endslot
    </x-pages.index>
@stop
