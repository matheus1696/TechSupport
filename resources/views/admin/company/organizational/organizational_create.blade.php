@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}"/>
@stop

@section('content')
    <!-- Inicio de Componentização Page Create -->
    <x-pages.forms method="create" route="{{route('organizational.store')}}" btnBack="{{route('organizational.index')}}">

        <x-form.select col="6" label="Hierarquia" id="hie_setor">
            <option value="0">Setor Principal</option>
            @foreach ($db as $item)
                <option value="{{$item->id}}">
                    @for ($i = 0; $i < preg_match_all('!\d+!',$item->ord_setor); $i++) <span>-</span> @endfor
                    {{$item->sg_setor}} - {{$item->no_setor}}
                </option>
            @endforeach
        </x-form.select>

        <x-form.input col="2" label="Siglas" id="sg_setor" required="required"/>
        <x-form.input col="4" label="Setor" id="no_setor" required="required"/>
        <x-form.textarea label="Descrição do Setor" id="des_setor"/>
    </x-pages.forms>
@stop
