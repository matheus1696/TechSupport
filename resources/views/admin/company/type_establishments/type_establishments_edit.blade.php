@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}"/>
@stop

@section('content')
    <!-- Inicio de Componentização Page Edit -->
    <x-pages.forms method="edit" route="{{route('type_establishments.update',['type_establishment'=>$db->id])}}" btnBack="{{route('type_establishments.index')}}">
        <x-form.input col="12" label="Tipo de Estabelecimento" id="no_tipo_estabelecimento" value="{{$db->no_tipo_estabelecimento}}"/>
    </x-pages.forms>
@stop
