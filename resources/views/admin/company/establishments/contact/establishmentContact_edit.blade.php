@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}"/>
@stop

@section('content')
    <!-- Inicio de Componentização Page Create -->
    <x-pages.forms method="edit" route="{{route('establishments.contact.update',['contact'=>$db->id])}}" btnBack="{{route('establishments.index')}}">
        <input type="hidden" name="estabelecimento_id" value="{{$dbEstablishments->id}}">
        <x-form.input col="5" label="Setor" id="dp_unidade" required="required" value="{{$db->dp_unidade}}"/>
        <x-form.input col="2" type="tel" label="Telefone" id="con_unidade" value="{{$db->con_unidade}}"/>
        <x-form.input col="2" type="number" label="Ramal" id="con_unidade_2" value="{{$db->con_unidade_2}}"/>

        <x-form.select col="3" label="Contato Principal" id="con_principal">
            <option @if($db->con_principal == "Principal") selected @endif value="Principal">Principal</option>
            <option @if($db->con_principal == "Interno") selected @endif value="Interno">Interno</option>
        </x-form.select>
    </x-pages.forms>

    <x-conteiner class="my-1">
        <x-table.table>
            @slot('thead')
                <tr>
                    <th class="col-5">Setor</th>
                    <th class="col-2">Telefone</th>
                    <th class="col-2">Ramal</th>
                    <th class="col-2">Tipo</th>
                    <th class="col-1"></th>
                </tr>
            @endslot

            @slot('tbody')
                @foreach ($dbLists as $dbList)
                    <tr>
                        <td>{{$dbList->dp_unidade}}</td>
                        <td>{{$dbList->con_unidade}}</td>
                        <td>{{$dbList->con_unidade_2}}</td>
                        <td>{{$dbList->con_principal}}</td>
                        <td class="text-center">
                            <x-button.minButtonEdit route="{{route('establishments.contact.edit',['establishment'=>$dbList->estabelecimento_id, 'contact'=>$dbList->id])}}"></x-button.minButtonEdit>
                            <x-button.minButtonDelete route="{{route('establishments.contact.destroy',['contact'=>$dbList->id])}}"></x-button.minButtonDelete>
                        </td>
                    </tr>
                @endforeach
            @endslot
        </x-table.table>
    </x-conteiner>
@stop
