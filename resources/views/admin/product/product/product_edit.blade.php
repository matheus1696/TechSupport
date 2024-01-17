@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}"/>
@stop

@section('content')
    <!-- Inicio de Componentização Page Edit -->
    <x-pages.forms method="edit" route="{{route('products.update',['product'=>$db->id])}}" btnBack="{{route('products.index')}}">
        <x-form.input col="2" label="Código" id="cod_produto" required="required" value="{{$db->cod_produto}}"/>
        <x-form.input col="7" label="Produto" id="no_produto" required="required" value="{{$db->no_produto}}"/>

        <x-form.select col="3" label="Tipo do Produto" id="tp_produto">
            <option @if($db->tp_produto == "Consumo") selected @endif value="Consumo">Consumo</option>
            <option @if($db->tp_produto == "Permanente") selected @endif  value="Permanente">Permanente</option>
        </x-form.select>

        <x-form.textarea col="12" label="Descrição" id="desc_produto" required="required" value="{{$db->desc_produto}}"/>
    </x-pages.edit>
@stop
