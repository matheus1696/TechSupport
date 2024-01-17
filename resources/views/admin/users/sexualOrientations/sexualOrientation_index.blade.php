@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}"/>
@stop

@section('content')

    <!-- Inicio de Componentização da Página Index -->
    <x-pages.index>
        @slot('body')
            <x-conteiner>

                <x-table.table>
                    @slot('thead')
                        <tr>
                            <th>Orientação Sexual</th>
                            <th class="col-2 text-center">Status</th>
                            <th class="col-1"></th>
                        </tr>
                    @endslot

                    @slot('tbody')
                        @foreach ($db as $item)
                            <tr>
                                <td>{{$item->no_orientacao_sexual}}</td>
                                <td class="text-center">
                                    <x-button.buttonStatus condition="{{$item->st_orientacao_sexual}}" route="{{route('sexualorientations.update',['sexualorientation'=>$item->id])}}" name="st_orientacao_sexual"/>
                                </td>
                                <td>
                                    <!-- Inicio de Componentização do ModalShow -->
                                    <x-modal.modalEdit id="SexualOrientations{{$item->id}}" title="Orientação Sexual">
                                        <form action="{{route('sexualorientations.update',['sexualorientation'=>$item->id])}}" method="post">
                                            @csrf @method('PUT')
                                            <div class="row">
                                                <x-form.input label="Orientação Sexual" col="12" id="no_orientacao_sexual" value="{{$item->no_orientacao_sexual}}"/>
                                            </div>

                                            <!-- Inicio de Componentização dos Botões -->
                                            <x-button.buttonGroup>
                                                <x-button.buttonSubmit action="edit" col="6"/>
                                            </x-button.buttonGroup>
                                        </form>
                                    </x-modal.modalEdit>
                                </td>
                            </tr>
                        @endforeach
                    @endslot
                </x-table.table>

            </x-conteiner>
        @endslot
    </x-pages.index>
@stop
