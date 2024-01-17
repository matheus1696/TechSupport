@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}"/>
@stop

@section('content')
    <!-- Inicio de Componentização Page Create -->
    <x-pages.forms method="create" route="{{route('attentions.store')}}" btnBack="{{route('attentions.index')}}">
        <x-form.input col="12" label="Níveis de Atenção/Blocos" id="no_nivel_atencao"/>
    </x-pages.forms>
@stop
