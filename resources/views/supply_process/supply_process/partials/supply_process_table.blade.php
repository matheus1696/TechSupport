<x-table.table :db="$db">
    @slot('thead')
        <x-table.th class="w-40">Nº Processo</x-table.th>
        <x-table.th>Titulo do Processo</x-table.th>
        <x-table.th class="w-40">Data Venc.</x-table.th>
        <x-table.th class="w-28">Status</x-table.th>
        <x-table.th class="w-40"></x-table.th>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <x-table.tr 
                @if ($item->due_date < Today() && $item->due_date != NULL) style="background: rgba(255, 0, 0, 0.500)"
                @elseif ($item->due_date < date('Y-m-d', strtotime("+90 days")) && $item->due_date != NULL) style="background: rgba(255, 255, 0, 0.500)" 
                @endif
            >
                <x-table.td class="text-center">{{$item->code_process}}</x-table.td>
                <x-table.td class="text-center">{{$item->title}}</x-table.td>
                <x-table.td class="text-center">{{$item->due_date == NULL ? "" : date('d/m/Y',strtotime($item->due_date))}}</x-table.td>
                <x-table.td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}" name="status" route="{{route('supply_processes.status',['supply_process'=>$item->id])}}" />
                </x-table.td>
                <x-table.td class="text-center">
                    <x-button.minButtonModalInfo id="SupplyProcess{{$item->id}}" title="Informação do Processo de Fornecimento">
                            <div class="row justify-content-center" 
                                @if ($item->due_date < Today() && $item->due_date != NULL) style="background: rgba(255, 0, 0, 0.500);border-radius: 5px; padding: 10px;"
                                @elseif($item->due_date < date('Y-m-d', strtotime("+90 days")) && $item->due_date != NULL) style="background: rgba(255, 255, 0, 0.500);border-radius: 5px; padding:10px;"
                                @endif
                            >
                                <div class="row justify-content-center">
                                    <div class="my-2 col-lg-4"><strong>Nº do Processo: </strong>{{$item->code_process}}</div>
                                    <div class="my-2 col-lg-4"><strong>Nº do Pregão: </strong>{{$item->code_auction}}</div>
                                    <div class="my-2 col-lg-4"><strong>Nº do Contrato: </strong>{{$item->code_contract}}</div>
                                    <div class="my-2 col-lg-12"><strong>Título: </strong>{{$item->title}}</div>
                                    <div class="my-2 col-lg-12 row">
                                        <strong class="pr-1">Objetivo:</strong>
                                        <div>{!!$item->description!!}</div>
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

                                    <div class="col-12">
                                        <hr>
                                        <h6 class="my-2 text-center">Lista de Itens</h6>
                                        <div class="my-2">
                                            <x-table.table>
                                                @slot('thead')
                                                    <tr>
                                                        <td class="col-2">Cód.</td>
                                                        <td class="col-8">Nome Produto</td>
                                                        <td class="col-2">Quant. Total</td>
                                                    </tr>
                                                @endslot
                                                @foreach ($dbSupplyProcessItems as $dbSupplyProcessItem)
                                                    @if ($item->id == $dbSupplyProcessItem->process_id)
                                                        @slot('tbody')
                                                            <tr>
                                                                <td class="text-center">{{$dbSupplyProcessItem->Product->code ?? ""}}</td>
                                                                <td class="text-center">{{$dbSupplyProcessItem->Product->title ?? ""}}</td>
                                                                <td class="text-center">{{$dbSupplyProcessItem->amount_adm + $dbSupplyProcessItem->amount_atb + $dbSupplyProcessItem->amount_mac + $dbSupplyProcessItem->amount_vsan + $dbSupplyProcessItem->amount_vepd ?? ""}}</td>
                                                            </tr>
                                                        @endslot
                                                    @endif
                                                @endforeach
                                            </x-table.table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </x-button.minButtonModalInfo>
                    <x-button.minButtonShow route="{{route('supply_processes.show',['supply_process'=>$item->id])}}" />
                    <x-button.minButtonEdit route="{{route('supply_processes.edit',['supply_process'=>$item->id])}}" />
                </td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>