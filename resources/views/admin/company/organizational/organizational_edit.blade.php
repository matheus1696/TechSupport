@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}"/>
@stop

@section('content')
    <!-- Inicio de Componentização Page Edit -->
    <x-pages.forms method="edit" route="{{route('organizational.update',['organizational'=>$db->id])}}" btnBack="{{route('organizational.index')}}">

        <x-form.select col="4" label="Hierarquia" id="hie_setor">
            <option value="0" @if ($db->hie_setor == 0) selected @endif>Setor Principal</option>
            @foreach ($dbSector as $item)
                @if ($db->id != $item->id)
                    <option value="{{$item->id}}" @if ($db->hie_setor == $item->id) selected @endif>
                        @for ($i = 0; $i < preg_match_all('!\d+!',$item->ord_setor); $i++) <span>-</span> @endfor
                        {{$item->no_setor}}
                    </option>
                @endif
            @endforeach
        </x-form.select>

        <x-form.input col="2" label="Siglas" id="sg_setor" value="{{$db->sg_setor}}"/>
        <x-form.input col="6" label="Setor" id="no_setor" value="{{$db->no_setor}}"/>
        <x-form.textarea label="Descrição do Setor" id="des_setor" value="{{$db->des_setor}}"/>
    </x-pages.forms>
@stop
