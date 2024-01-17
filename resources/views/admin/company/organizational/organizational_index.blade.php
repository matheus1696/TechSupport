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
                            <th>Organograma</th>
                            <th class="col-1 text-center">Status</th>
                            <th class="col-2 text-center"></th>
                        </tr>
                    @endslot

                    @slot('tbody')
                        @foreach ($db as $item)
                            <tr>
                                <td>
                                    <div style="padding-left:{{preg_match_all('!\d+!',$item->ord_setor)}}em;">
                                        {{$item->sg_setor}} - {{$item->no_setor}}
                                    </div>
                                </td>
                                <td class="text-center">
                                    <x-button.buttonStatus condition="{{$item->st_setor}}" route="{{route('organizational.status',['organizational'=>$item->id])}}" name="st_setor"/>
                                </td>
                                <td class="text-center">
                                    <x-button.minButtonEdit route="{{route('organizational.edit',['organizational'=>$item->id])}}"/>
                                    <x-button.minButtonDelete route="{{route('organizational.destroy',['organizational'=>$item->id])}}"/>
                                </td>
                            </tr>
                        @endforeach
                    @endslot
                </x-table.table>

            </x-conteiner>
        @endslot
    </x-pages.index>
@stop
