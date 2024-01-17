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
                <x-table.table>
                    @slot('thead')
                        <tr>
                            <th>Tipo de Estabelecimento</th>
                            <th class="col-1 text-center">Status</th>
                            <th class="col-3 col-xl-2"></th>
                        </tr>
                    @endslot

                    @slot('tbody')
                        @foreach ($db as $item)
                            <tr>
                                <td>{{$item->no_tipo_estabelecimento}}</td>
                                <td class="text-center">
                                    <x-button.buttonStatus condition="{{$item->st_tipo_estabelecimento}}" route="{{route('type_establishments.update',['type_establishment'=>$item->id])}}" name="st_tipo_estabelecimento"/>
                                </td>
                                <td class="text-center">
                                    <x-button.minButtonModal id="TypeEstablishmentsModal{{$item->id}}" title="Unidades Cadastradas">
                                        <ul>
                                            @foreach ($dbEstablishments as $dbEstablishment)
                                                @if ($dbEstablishment->tipo_estabelecimento_id == $item->id)
                                                        <li>{{$dbEstablishment->no_unidade}}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </x-button.minButtonModal>
                                    <x-button.minButtonEdit route="{{route('type_establishments.edit',['type_establishment'=>$item->id])}}"/>
                                    <x-button.minButtonDelete route="{{route('type_establishments.destroy',['type_establishment'=>$item->id])}}"/>
                                </td>
                            </tr>
                        @endforeach
                    @endslot
                </x-table.table>
            </x-conteiner>
        @endslot
    </x-pages.index>
@stop
