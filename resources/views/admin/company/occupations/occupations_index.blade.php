@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}"/>
@stop

@section('content')

    <!-- Inicio de Componentização Page Index -->
    <x-pages.index paginate="{{$db->links()}}">
        @slot('body')
            <x-conteiner>

                <div class="pb-3">
                    <form method="get" class="row">
                        <x-form.input col="3" label="Código CBO" id="searchCod" placeholder="Pesquisa por CBO" value="{{$search['searchCod'] ?? ''}}"/>
                        <x-form.input col="8" label="Ocupação" id="searchName" placeholder="Pesquisa por Ocupação" value="{{$search['searchName'] ?? ''}}"/>
                        <x-button.buttonSearch col="1"/>
                    </form>
                </div>

                <x-table.table>
                    @slot('thead')
                        <tr>
                            <th>Código</th>
                            <th>Ocupação (CBO)</th>
                            <th class="col-2 text-center">Status</th>
                        </tr>
                    @endslot

                    @slot('tbody')
                        @foreach ($db as $item)
                            <tr>
                                <td>{{$item->cod_cbo}}</td>
                                <td>{{$item->no_cbo}}</td>
                                <td class="text-center">
                                    <x-button.buttonStatus condition="{{$item->st_cbo}}" route="{{route('occupations.update',['occupation'=>$item->id])}}" name="st_cbo"/>
                                </td>
                            </tr>
                        @endforeach
                    @endslot
                </x-table.table>

            </x-conteiner>
        @endslot
    </x-pages.index>
@stop
