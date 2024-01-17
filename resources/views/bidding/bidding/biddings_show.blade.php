@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}"/>
@stop

@section('content')
    <!-- Inicio de Componentização Page Show -->
    <x-pages.index>
        @slot('body')
            <x-conteiner>

                <div class="row px-lg-2 py-lg-2">
                    <p class="col-lg"><strong>Nº do Processo: </strong>{{$db->cod_processo ?? ""}}</p>
                    <p class="col-lg"><strong>Nº do Pregão: </strong>{{$db->cod_pregao ?? ""}}</p>
                    <p class="col-lg"><strong>Nº do Contrato: </strong>{{$db->cod_contrato ?? ""}}</p>
                    <p class="col-lg-12"><strong>Titulo: </strong>{{$db->no_processo ?? ""}}</p>
                    <div class="col-lg-12 mb-3"><strong>Objetivo: </strong>{!!$db->desc_processo ?? ""!!}</div>
                    <p class="col-lg"><strong>Data Inicio: </strong>{{$db->data_inicio == NULL ? "" : date('d/m/Y',strtotime($db->data_inicio))}}</p>
                    <p class="col-lg">
                        <strong>Data de Venc.: </strong>{{$db->data_inicio == NULL ? "" : date('d/m/Y',strtotime($db->data_vencimento))}}
                    </p>
                    <p class="col-lg"><strong>Tempo de Vigência:</strong>
                        {{$db->tempo_vigencia}}
                        @if($db->tempo_vigencia)
                            Meses
                        @endif
                    </p>
                </div>

                <div class="row justify-content-center py-lg-3">
                    <a href="{{route('biddingItens.create',['bidding'=>$db->id])}}" class="btn btn-app bg-success">
                        <i class="fas fa-plus text-sm mb-1"></i> Cad. Item
                    </a>
                    <a href="{{route('biddings.edit',['bidding'=>$db->id])}}" class="btn btn-app bg-warning">
                        <i class="fas fa-pen text-sm mb-1"></i> Editar
                    </a>
                    <a href="{{route('biddings.index')}}" class="btn btn-app bg-secondary">
                        <i class="fas fa-reply text-sm mb-1"></i> Voltar
                    </a>
                </div>

                @if ($db->data_vencimento < Today() && $db->data_vencimento != NULL)
                    <div class="alert alert-danger" role="alert">
                        Processo Licitatório Vencido
                    </div>
                @elseif ($db->data_vencimento < date('Y-m-d', strtotime("+90 days")) && $db->data_vencimento != NULL)
                    <div class="alert alert-warning" role="alert">
                        Processo Licitatório Próximo do Fim da Vigência
                    </div>
                @endif
            </x-conteiner>

            <x-conteiner>
                <x-table.table>
                    @slot('thead')
                        <tr>
                            <td class="col-lg-2 text-sm text-center">Produto</td>
                            <td class="col-lg-1 text-sm text-center">Qt. ADM</td>
                            <td class="col-lg-1 text-sm text-center">Qt. ATB</td>
                            <td class="col-lg-1 text-sm text-center">Qt. MAC</td>
                            <td class="col-lg-1 text-sm text-center">Qt. V. EPD</td>
                            <td class="col-lg-1 text-sm text-center">Qt. V. SAN</td>
                            <td class="col-lg-1 text-sm text-center">Total</td>
                            <td class="col-lg-1 text-sm text-center">Un. Medida</td>
                            <td class="col-lg-1 text-sm text-center">Garantia</td>
                            <td class="col-lg-2 text-sm text-center">Ações</td>
                        </tr>
                    @endslot

                    @slot('tbody')
                        @foreach ($dbBiddingItens as $item)
                            <tr>
                                <td class="text-center">{{$item->Product->no_produto}}</td>
                                <td class="text-center">{{$item->quant_adm}}</td>
                                <td class="text-center">{{$item->quant_atb}}</td>
                                <td class="text-center">{{$item->quant_mac}}</td>
                                <td class="text-center">{{$item->quant_vepd}}</td>
                                <td class="text-center">{{$item->quant_vsan}}</td>
                                <td class="text-center">{{$item->quant_adm + $item->quant_atb + $item->quant_mac + $item->quant_vepd + $item->quant_vsan}}</td>
                                <td class="text-center">{{$item->ProductUnit->no_unidade_medida}}</td>
                                <td class="text-center">
                                    {{$item->garantia}} meses</td>
                                <td class="text-center">
                                    <x-button.minButtonModal id="BiddingItens{{$item->id}}" title="Informação do Produto">
                                        <p><strong>Código do Produto:</strong> {{$item->Product->cod_produto}}</p>
                                        <p><strong>Produto:</strong> {{$item->Product->no_produto}}</p>
                                        <div>
                                            <strong>Descrição do Produto:</strong><br/>
                                            {!!$item->Product->desc_produto!!}
                                        </div>
                                        <p><strong>Tipo do Produto:</strong> {{$item->Product->tp_produto}}</p>
                                    </x-button.minButtonModal>
                                    <x-button.minButtonEdit route="{{route('biddingItens.edit',['biddingItem'=>$item->id])}}"/>
                                    <x-button.minButtonDelete route="{{route('biddingItens.destroy',['biddingItem'=>$item->id])}}"/>
                                </td>
                            </tr>
                        @endforeach
                    @endslot
                </x-table.table>

            </x-conteiner>
        @endslot
    </x-pages.index>
@stop


