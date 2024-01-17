@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}"/>
@stop

@section('content')
    <!-- Inicio de Componentização Page Create -->
    <x-pages.forms method="create" route="{{route('biddings.store')}}" btnBack="{{route('biddings.index')}}">
        <x-form.input col="12" label="Título" id="no_processo" required="required"/>
        <x-form.textarea col="12" label="Objeto" id="desc_processo" required="required"/>
    </x-pages.create>
@stop
