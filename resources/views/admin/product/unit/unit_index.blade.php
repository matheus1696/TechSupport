@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}" route="{{$header['route']}}"/>
@stop

@section('content')

    <!-- Inicio de Componentização Page Index -->
    <x-pages.index paginate="{{$db->links()}}">
        @slot('body')
            <x-conteiner>

                <div class="pb-3">
                    <form method="get" class="row">
                        <x-form.input col="11" label="Unidade de Medida" id="searchName" placeholder="Pesquisa por Nome" value="{{$search['searchName'] ?? ''}}"/>
                        <x-button.buttonSearch/>
                    </form>
                </div>

                <x-table.table>
                    @slot('thead')
                        <tr>
                            <th>Unidade de Medida</th>
                            <th class="col-1 text-center">Status</th>
                            <th class="col-1 text-center"></th>
                        </tr>
                    @endslot

                    @slot('tbody')
                        @foreach ($db as $item)
                            <tr>
                                <td>{{$item->no_unidade_medida}}</td>
                                <td class="text-center">
                                    <x-button.buttonStatus condition="{{$item->st_unidade_medida}}" name="st_unidade_medida" route="{{route('units.status',['unit'=>$item->id])}}"/>
                                </td>
                                <td>
                                    <x-button.minButtonEdit route="{{route('units.edit',['unit'=>$item->id])}}"/>
                                </td>
                            </tr>
                        @endforeach
                    @endslot
                </x-table.table>

            </x-conteiner>
        @endslot
    </x-pages.index>
@stop
