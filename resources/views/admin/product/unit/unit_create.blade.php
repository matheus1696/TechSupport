@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}"/>
@stop

@section('content')
    <!-- Inicio de Componentização Page Create -->
    <x-pages.forms method="create" route="{{route('units.store')}}" btnBack="{{route('units.index')}}">
        <x-form.input col="12" label="Unidade de Medida" id="no_unidade_medida" required="required"/>
    </x-pages.forms>
@stop
