@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}"/>
@stop

@section('content')
    <!-- Inicio de Componentização Page Create -->
    <x-pages.forms method="create" route="{{route('products.store')}}" btnBack="{{route('products.index')}}">
        <x-form.input col="2" label="Código" id="cod_produto" required="required"/>
        <x-form.input col="7" label="Produto" id="no_produto" required="required"/>

        <x-form.select col="3" label="Tipo do Produto" id="tp_produto">
            <option value="Consumo">Consumo</option>
            <option value="Permanente">Permanente</option>
        </x-form.select>

        <x-form.textarea col="12" label="Descrição" id="desc_produto" required="required"/>
    </x-pages.forms>
@stop
