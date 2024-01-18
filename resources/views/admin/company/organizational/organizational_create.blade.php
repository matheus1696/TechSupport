@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}"/>
@stop

@section('content')
    <!-- Inicio de Componentização Page Create -->
    <x-pages.forms method="create" route="{{route('organizational.store')}}" btnBack="{{route('organizational.index')}}">

        <x-form.select col="6" label="Hierarquia" id="hierarchy">
            <option value="0">Setor Principal</option>
            @foreach ($db as $item)
                <option value="{{$item->id}}">
                    @for ($i = 0; $i < preg_match_all('!\d+!',$item->order); $i++) <span>-</span> @endfor
                    {{$item->acronym}} - {{$item->title}}
                </option>
            @endforeach
        </x-form.select>

        <x-form.input col="2" label="Siglas" id="acronym" required="required"/>
        <x-form.input col="4" label="Setor" id="title" required="required"/>
        <x-form.textarea label="Descrição do Setor" id="description"/>
    </x-pages.forms>
@stop
