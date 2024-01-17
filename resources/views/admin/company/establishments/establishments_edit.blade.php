@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}"/>
@stop

@section('content')
    <!-- Inicio de Componentização Page Edit -->
    <x-pages.forms method="edit" route="{{route('establishments.update',['establishment'=>$db->id])}}" btnBack="{{route('establishments.index')}}">
        <x-form.input col="2" label="CNES" id="cod_unidade_cnes" required="required" value="{{$db->cod_unidade_cnes}}"/>
        <x-form.input col="10" label="Nome do Estabelecimento" id="no_unidade" required="required" value="{{$db->no_unidade}}"/>
        <x-form.input col="10" label="Logradouro" id="end_logradouro" required="required" value="{{$db->end_logradouro}}"/>
        <x-form.input col="2" label="Número" id="end_numero" required="required" value="{{$db->end_numero}}"/>
        <x-form.input col="4" label="Bairro" id="end_bairro" required="required" value="{{$db->end_bairro}}"/>

        <x-form.select col="4" label="Cidade" id="cidade_id" required="required">
            @foreach ($dbRegionCities as $item)
                <option value="{{$item->id}}" @if ($db->cidade_id == $item->id) selected @endif>
                    {{$item->cod_municipio_ibge}} | {{$item->no_municipio}} - {{$item->RegionStates->sg_estado}}
                </option>
            @endforeach
        </x-form.select>

        <x-form.input col="2" label="Latitude" id="end_latitude" value="{{$db->end_latitude}}"/>
        <x-form.input col="2" label="Longitude" id="end_lontidude" value="{{$db->end_lontidude}}"/>

        <x-form.select col="6" label="Tipo de Estabelecimento" id="tipo_estabelecimento_id" required="required">
            @foreach ($dbCompanyTypeEstablishments as $item)
                <option value="{{$item->id}}" @if ($db->tipo_estabelecimento_id == $item->id) selected @endif>
                    {{$item->no_tipo_estabelecimento}}
                </option>
            @endforeach
        </x-form.select>

        <x-form.select col="6" label="Sub-Função - Bloco" id="nivel_atencao_id" required="required">
            @foreach ($dbCompanyAttentionLevels as $item)
                <option value="{{$item->id}}" @if ($db->nivel_atencao_id == $item->id) selected @endif>
                    {{$item->no_nivel_atencao}}
                </option>
            @endforeach
        </x-form.select>
    </x-pages.forms>
@stop
