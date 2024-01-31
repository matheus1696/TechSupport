<x-table.table :db="$db">
    @slot('thead')
        <tr>
            <th class="text-xs col-1">Nº Processo</th>
            <th class="text-xs col-1">Nº Pregão</th>
            <th class="text-xs col-1">Nº Contrato</th>
            <th class="text-xs">Titulo do Processo</th>
            <th class="text-xs col-1">Data Início</th>
            <th class="text-xs col-1">Data Venc.</th>
            <th class="text-xs col-1">Status</th>
            <th class="text-xs col-2"></th>
        </tr>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <tr 
                @if ($item->due_date < Today() && $item->due_date != NULL) style="background: rgba(255, 0, 0, 0.500)"
                @elseif ($item->due_date < date('Y-m-d', strtotime("+90 days")) && $item->due_date != NULL) style="background: rgba(255, 255, 0, 0.500)" 
                @endif
            >
                <td class="text-center">{{$item->code_process}}</td>
                <td class="text-center">{{$item->code_auction}}</td>
                <td class="text-center">{{$item->code_contract}}</td>
                <td class="text-center">{{$item->title}}</td>
                <td class="text-center">{{$item->start_date == NULL ? "" : date('d/m/Y',strtotime($item->start_date))}}</td>
                <td class="text-center">{{$item->due_date == NULL ? "" : date('d/m/Y',strtotime($item->due_date))}}</td>
                <td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}" name="status" route="{{route('biddings.status',['bidding'=>$item->id])}}" />
                </td>
                <td class="text-center">
                    <x-button.minButtonModal id="Bidding{{$item->id}}" title="Informação do Processo Licitatório">
                            <div class="row justify-content-center" 
                                @if ($item->due_date < Today() && $item->due_date != NULL) style="background: rgba(255, 0, 0, 0.500);border-radius: 5px; padding: 10px;"
                                @elseif($item->due_date < date('Y-m-d', strtotime("+90 days")) && $item->due_date != NULL) style="background: rgba(255, 255, 0, 0.500);border-radius: 5px; padding:10px;"
                                @endif
                            >
                                <div class="row justify-content-center">
                                    <div class="my-2 col-lg-4"><strong>Nº do Processo</strong>{{$item->code_process}}</div>
                                    <div class="my-2 col-lg-4"><strong>Nº do Pregão:</strong>{{$item->cod_pregao}}</div>
                                    <div class="my-2 col-lg-4"><strong>Nº do Contrato:</strong>{{$item->code_contract}}</div>
                                    <div class="my-2 col-lg-12"><strong>Título:</strong>{{$item->bidding_process}}</div>
                                    <div class="my-2 col-lg-12 row">
                                        <strong>Objetivo: </strong>
                                        {!!$item->description!!}
                                    </div>
                                    <div class="my-2 col-lg-4">
                                        <strong>Início:</strong>
                                        {{$item->start_date == NULL ? "" : date('d/m/Y',strtotime($item->start_date))}}
                                    </div>
                                    <div class="my-2 col-lg-4">
                                        <strong>Vencimento:</strong>
                                        {{$item->due_date == NULL ? "" : date('d/m/Y',strtotime($item->due_date))}}
                                    </div>
                                    <div class="my-2 col-lg-4">
                                        <strong>Vigência:</strong>{{$item->validity}}
                                        @if (!empty($item->validity)) meses @endif
                                    </div>
                                    
                                    <hr>

                                    <div>
                                        <h6 class="my-2 text-center col-12">Lista de Itens</h6>
                                        <div class="my-2 col-12">
                                            <x-table.table>
                                                @slot('thead')
                                                    <tr>
                                                        <td class="col-3">Cód.</td>
                                                        <td class="col-7">Nome Produto</td>
                                                        <td class="col-2">Quant. Total</td>
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
                            </div>
                    </x-button.minButtonModal>
                    <x-button.minButtonShow route="{{route('biddings.show',['bidding'=>$item->id])}}" />
                    <x-button.minButtonEdit route="{{route('biddings.edit',['bidding'=>$item->id])}}" />
                </td>
            </tr>
        @endforeach
    @endslot
</x-table.table>