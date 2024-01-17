@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}"/>
@stop

@section('content')
    <!-- Inicio de Componentização Page Create -->
    <x-pages.forms method="create" route="{{route('establishments.store')}}" btnBack="{{route('establishments.index')}}">
        <x-form.input col="2" label="CNES" id="cod_unidade_cnes" required="required"/>
        <x-form.input col="10" label="Nome do Estabelecimento" id="no_unidade" required="required"/>
        <x-form.input col="10" label="Logradouro" id="end_logradouro" required="required"/>
        <x-form.input col="2" label="Número" id="end_numero" required="required"/>
        <x-form.input col="4" label="Bairro" id="end_bairro" required="required"/>

        <x-form.select col="4" label="Cidade" id="cidade_id">
            @foreach ($dbRegionCities as $item)
                <option value="{{$item->id}}">{{$item->cod_municipio_ibge}} | {{$item->no_municipio}} - {{$item->RegionStates->sg_estado}}</option>
            @endforeach
        </x-form.select>

        <x-form.input col="2" label="Latitude" id="end_latitude"/>
        <x-form.input col="2" label="Longitude" id="end_lontidude"/>

        <x-form.select col="6" label="Tipo de Estabelecimento" id="tipo_estabelecimento_id">
            @foreach ($dbCompanyTypeEstablishments as $item)
                <option value="{{$item->id}}">{{$item->no_tipo_estabelecimento}}</option>
            @endforeach
        </x-form.select>

        <x-form.select col="6" label="Sub-Função - Bloco" id="nivel_atencao_id">
            @foreach ($dbCompanyAttentionLevels as $item)
                <option value="{{$item->id}}">{{$item->no_nivel_atencao}}</option>
            @endforeach
        </x-form.select>
    </x-pages.forms>
@stop
