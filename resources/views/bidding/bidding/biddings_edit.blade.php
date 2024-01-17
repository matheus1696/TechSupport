@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}"/>
@stop

@section('content')
    <!-- Inicio de Componentização Page Edit -->
    <x-pages.forms method="edit" route="{{route('biddings.update',['bidding'=>$db->id])}}" btnBack="{{route('biddings.show',['bidding'=>$db->id])}}">
        <x-form.input col="12" label="Título" id="no_processo" required="required" value="{{$db->no_processo}}"/>
        <x-form.textarea col="12" label="Objeto" id="desc_processo" required="required" value="{{$db->desc_processo}}"/>
        <x-form.input col="2" label="Nº Processo" id="cod_processo" value="{{$db->cod_processo}}"/>
        <x-form.input col="2" label="Nº Pregão" id="cod_pregao" value="{{$db->cod_pregao}}"/>
        <x-form.input col="2" label="Nº Contrato" id="cod_contrato" value="{{$db->cod_contrato}}"/>
        <x-form.input col="3" label="Data de Inicío" type="date" id="data_inicio" value="{{$db->data_inicio}}" max="{{date('Y-m-d')}}"/>
        <x-form.input col="3" label="Data de Vencimento" type="date" id="data_vencimento" value="{{$db->data_vencimento}}"/>
    </x-pages.edit>''
@stop
