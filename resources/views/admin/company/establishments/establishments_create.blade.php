@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}"/>
@stop

@section('content')
    <!-- Inicio de Componentização Page Create -->
    <x-pages.forms method="create" route="{{route('establishments.store')}}" btnBack="{{route('establishments.index')}}">
        <x-form.input col="2" label="CNES" id="code" required="required"/>
        <x-form.input col="10" label="Nome do Estabelecimento" id="establishment" required="required"/>
        <x-form.input col="10" label="Logradouro" id="address" required="required"/>
        <x-form.input col="2" label="Número" id="number" required="required"/>
        <x-form.input col="4" label="Bairro" id="district" required="required"/>

        <x-form.select col="4" label="Cidade" id="city_id">
            @foreach ($dbRegionCities as $item)
                <option value="{{$item->id}}">{{$item->code_ibge}} | {{$item->city}} - {{$item->RegionStates->acronym}}</option>
            @endforeach
        </x-form.select>

        <x-form.input col="2" label="Latitude" id="latitude"/>
        <x-form.input col="2" label="Longitude" id="lontidude"/>

        <x-form.select col="6" label="Tipo de Estabelecimento" id="type_establishment_id">
            @foreach ($dbCompanyTypeEstablishments as $item)
                <option value="{{$item->id}}">{{$item->no_tipo_estabelecimento}}</option>
            @endforeach
        </x-form.select>

        <x-form.select col="6" label="Sub-Função - Bloco" id="attention_level_id">
            @foreach ($dbCompanyAttentionLevels as $item)
                <option value="{{$item->id}}">{{$item->attention_level_id}}</option>
            @endforeach
        </x-form.select>
    </x-pages.forms>
@stop
