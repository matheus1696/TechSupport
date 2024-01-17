@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}"/>
@stop

@section('content')
    <!-- Inicio de Componentização Page Create -->
    <x-pages.forms method="edit" route="{{route('biddingItens.update',['biddingItem'=>$db->id])}}" btnBack="{{route('biddings.show',['bidding'=>$dbBidding->id])}}">

        <input type="text" name="processo_id" value="{{$dbBidding->id}}" hidden>
        <x-form.input col="4" label="Nº Processo" id="disabled" disabled='disabled' value='{{$dbBidding->cod_processo}}'/>
        <x-form.input col="4" label="Nº Pregão" id="disabled" disabled='disabled' value='{{$dbBidding->cod_processo}}'/>
        <x-form.input col="4" label="Nº Contrato" id="disabled" disabled='disabled' value='{{$dbBidding->cod_processo}}'/>
        <x-form.input col="12" label="Titulo do Processo" id="disabled" disabled='disabled' value='{{$dbBidding->no_processo}}'/>

        <x-form.select col="8" label="Produto" id="produto_id" required="required">
            @foreach ($dbProducts as $item)
                <option
                    value="{{$item->id}}"
                    @if ($db->produto_id == $item->id) selected @endif
                >
                    {{$item->no_produto}}
                </option>
            @endforeach
        </x-form.select>

        <x-form.select col="4" label="Medidas" id="unidade_medida_id" required="required">
            @foreach ($dbUnits as $item)
                <option
                    value="{{$item->id}}"
                    @if ($db->unidade_medida_id == $item->id) selected @endif
                >
                    {{$item->no_unidade_medida}}
                </option>
            @endforeach
        </x-form.select>

        <x-form.input col="2" type="number" label="Qt. ADM" id="quant_adm" value='{{$db->quant_adm}}'/>
        <x-form.input col="2" type="number" label="Qt. ATB" id="quant_atb" value='{{$db->quant_atb}}'/>
        <x-form.input col="2" type="number" label="Qt. MAC" id="quant_mac" value='{{$db->quant_mac}}'/>
        <x-form.input col="2" type="number" label="Qt. V. EPD" id="quant_vepd" value='{{$db->quant_vepd}}'/>
        <x-form.input col="2" type="number" label="Qt. V. SAN" id="quant_vsan" value='{{$db->quant_vsan}}'/>

        <x-form.input col="12" type="number" label="Garantia (em Meses)" id="garantia" required="required" value='{{$db->garantia}}'/>

        <x-form.input col="12" label="Modelo de Referência 1" id="modelo_referencia_1" value='{{$db->modelo_referencia_1}}'/>
        <x-form.input col="12" label="Modelo de Referência 2" id="modelo_referencia_2" value='{{$db->modelo_referencia_2}}'/>
        <x-form.input col="12" label="Modelo de Referência 3" id="modelo_referencia_3" value='{{$db->modelo_referencia_3}}'/>

    </x-pages.edit>
@stop
