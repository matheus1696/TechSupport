@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}"/>
@stop

@section('content')
    <!-- Inicio de Componentização Page Edit -->
    <x-pages.forms method="edit" route="{{route('attentions.update',['attention'=>$db->id])}}" btnBack="{{route('type_establishments.index')}}">
        <x-form.input col="12" label="Níveis de Atenção/Blocos" id="no_nivel_atencao" value="{{$db->no_nivel_atencao}}"/>
    </x-pages.forms>
@stop
