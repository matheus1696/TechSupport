@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}" route="{{$header['route']}}"/>
@stop

@section('content')

    <!-- Inicio de Componentização Page Index -->
    <x-pages.index>
        @slot('body')
            <x-conteiner>
                <x-table.table>
                    @slot('thead')
                        <tr>
                            <th>Níveis de Atenção/Blocos</th>
                            <th class="col-1 text-center">Status</th>
                            <th class="col-1"></th>
                        </tr>
                    @endslot

                    @slot('tbody')
                        @foreach ($db as $item)
                            <tr>
                                <td>{{$item->no_nivel_atencao}}</td>
                                <td class="text-center">
                                    <x-button.buttonStatus condition="{{$item->st_nivel_atencao}}" route="{{route('attentions.update',['attention'=>$item->id])}}" name="st_nivel_atencao"/>
                                </td>
                                <td class="text-center">
                                    <x-button.minButtonEdit route="{{route('attentions.edit',['attention'=>$item->id])}}"/>
                                </td>
                            </tr>
                        @endforeach
                    @endslot
                </x-table.table>
            </x-conteiner>
        @endslot
    </x-pages.index>
@stop
