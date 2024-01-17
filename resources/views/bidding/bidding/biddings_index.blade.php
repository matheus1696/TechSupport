@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}" route="{{$header['route']}}"/>
@stop

@section('content')
    <!-- Inicio de Componentização Page Index -->
    <x-pages.index paginate="{{$db->links()}}">
        @slot('body')
            <x-conteiner>

                <div class="pb-3">
                    <form method="get" class="row">
                        <x-form.input col="3" label="Nº do Processo" id="searchCod" placeholder="Pesquisa por Código" value="{{$search['searchCod'] ?? ''}}"/>
                        <x-form.input col="8" label="Titulo do Processo" id="searchtName" placeholder="Pesquisa por Nome" value="{{$search['searchtName'] ?? ''}}"/>
                        <x-button.buttonSearch/>
                    </form>
                </div>

                <x-table.table>
                    @slot('thead')
                        <tr>
                            <th class="col-1 text-center text-xs">Nº Processo</th>
                            <th class="col-1 text-center text-xs">Nº Pregão</th>
                            <th class="col-1 text-center text-xs">Nº Contrato</th>
                            <th class="text-center text-xs">Titulo do Processo</th>
                            <th class="col-1 text-center text-xs">Data Início</th>
                            <th class="col-1 text-center text-xs">Data Venc.</th>
                            <th class="col-1 text-center text-xs">Status</th>
                            <th class="col-2 text-center text-xs"></th>
                        </tr>
                    @endslot

                    @slot('tbody')
                        @foreach ($db as $item)
                            <tr
                                @if ($item->data_vencimento < Today() && $item->data_vencimento != NULL)
                                    style="background: rgba(255, 0, 0, 0.500)"
                                @elseif($item->data_vencimento < date('Y-m-d', strtotime("+90 days")) && $item->data_vencimento != NULL)
                                    style="background: rgba(255, 255, 0, 0.500)"
                                @endif
                            >
                                <td class="text-center">{{$item->cod_processo}}</td>
                                <td class="text-center">{{$item->cod_pregao}}</td>
                                <td class="text-center">{{$item->cod_contrato}}</td>
                                <td>{{$item->no_processo}}</td>
                                <td class="text-center">{{$item->data_inicio == NULL ? "" : date('d/m/Y',strtotime($item->data_inicio))}}</td>
                                <td class="text-center">{{$item->data_vencimento == NULL ? "" : date('d/m/Y',strtotime($item->data_vencimento))}}</td>
                                <td class="text-center">
                                    <x-button.buttonStatus condition="{{$item->st_processo}}" name="st_processo" route="{{route('biddings.status',['bidding'=>$item->id])}}"/>
                                </td>
                                <td class="text-center">
                                    <x-button.minButtonModal id="Bidding{{$item->id}}" title="Informação do Processo Licitatório">
                                        <div class="row justify-content-center"
                                            @if ($item->data_vencimento < Today() && $item->data_vencimento != NULL)
                                                style="background: rgba(255, 0, 0, 0.500);border-radius: 5px; padding: 10px;"
                                            @elseif($item->data_vencimento < date('Y-m-d', strtotime("+90 days")) && $item->data_vencimento != NULL)
                                                style="background: rgba(255, 255, 0, 0.500);border-radius: 5px; padding: 10px;"
                                            @endif
                                        >
                                            <div class="row justify-content-center ">
                                                <div class="col-lg-4 my-2"><strong>Nº do Processo</strong> {{$item->cod_processo}}</div>
                                                <div class="col-lg-4 my-2"><strong>Nº do Pregão:</strong> {{$item->cod_pregao}}</div>
                                                <div class="col-lg-4 my-2"><strong>Nº do Contrato:</strong> {{$item->cod_contrato}}</div>
                                                <div class="col-lg-12 my-2"><strong>Título:</strong> {{$item->no_processo}}</div>
                                                <div class="col-lg-12"><strong>Objetivo:</strong>{!!$item->desc_processo!!}</div>
                                                <div class="col-lg-4 my-2"><strong>Início:</strong> {{$item->data_inicio == NULL ? "" : date('d/m/Y',strtotime($item->data_inicio))}}</div>
                                                <div class="col-lg-4 my-2"><strong>Vencimento:</strong> {{$item->data_vencimento == NULL ? "" : date('d/m/Y',strtotime($item->data_vencimento))}}</div>
                                                <div class="col-lg-4 my-2"><strong>Vigência:</strong> {{$item->tempo_vigencia}} meses</div>
                                                <h6 class="col-12 text-center my-2">Lista de Itens</h6>
                                                <div class="col-12 my-2">
                                                    <x-table.table>
                                                            @slot('thead')
                                                                <tr>
                                                                    <td class="col-3 text-center">Cód.</td>
                                                                    <td class="col-7 text-center">Nome Produto</td>
                                                                    <td class="col-2 text-center">Quant. Total</td>
                                                                </tr>
                                                            @endslot
                                                        @foreach ($dbBiddigItens as $dbBiddigItem)
                                                            @if ($item->id == $dbBiddigItem->processo_id)
                                                                @slot('tbody')
                                                                    <tr>
                                                                        <td class="text-center">{{$dbBiddigItem->Product->cod_produto ?? ""}}</td>
                                                                        <td class="text-center">{{$dbBiddigItem->Product->no_produto ?? ""}}</td>
                                                                        <td class="text-center">{{$dbBiddigItem->quant_adm + $dbBiddigItem->quant_atb + $dbBiddigItem->quant_mac + $dbBiddigItem->quant_vsan + $dbBiddigItem->quant_vepd ?? ""}}</td>
                                                                    </tr>
                                                                @endslot
                                                            @endif
                                                        @endforeach
                                                    </x-table.table>
                                                </div>
                                            </div>
                                        </div>
                                    </x-button.minButtonModal>
                                    <x-button.minButtonShow route="{{route('biddings.show',['bidding'=>$item->id])}}"/>
                                    <x-button.minButtonEdit route="{{route('biddings.edit',['bidding'=>$item->id])}}"/>
                                </td>
                            </tr>
                        @endforeach
                    @endslot
                </x-table.table>

            </x-conteiner>
        @endslot
    </x-pages.index>
@stop


