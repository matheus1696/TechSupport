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
            <tr
            @if ($item->due_date < Today() && $item->due_date != NULL)
                class="bg-red-400/50 hover:bg-red-100"
            @elseif ($item->due_date < date('Y-m-d', strtotime("+90 days")) && $item->due_date != NULL) 
                class="bg-yellow-400/50 hover:bg-yellow-100"
            @elseif ($item->due_date > Today() && $item->due_date != NULL)
                class="hover:bg-zinc-100"
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
                            <div 
                                @if ($item->due_date < Today() && $item->due_date != NULL)
                                    class="bg-red-400/50 p-3 rounded-lg"
                                @elseif ($item->due_date < date('Y-m-d', strtotime("+90 days")) && $item->due_date != NULL) 
                                    class="bg-yellow-400/50 p-3 rounded-lg"
                                @elseif ($item->due_date > Today() && $item->due_date != NULL)                                
                                    class="p-3 rounded-lg"
                                @endif
                            >
                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-3 mb-3">
                                    <div><strong>Nº do Processo: </strong>{{$item->code_process}}</div>
                                    <div><strong>Nº do Pregão: </strong>{{$item->code_auction}}</div>
                                    <div><strong>Nº do Contrato: </strong>{{$item->code_contract}}</div>
                                    <div class="lg:col-span-3"><strong>Título: </strong>{{$item->title}}</div>
                                    <div class="lg:col-span-3"><strong>Objetivo: </strong> {!! $item->description ?? "" !!} </div>
                                    <div>
                                        <strong>Início:</strong>
                                        {{$item->start_date == NULL ? "" : date('d/m/Y',strtotime($item->start_date))}}
                                    </div>
                                    <div>
                                        <strong>Vencimento:</strong>
                                        {{$item->due_date == NULL ? "" : date('d/m/Y',strtotime($item->due_date))}}
                                    </div>
                                    <div>
                                        <strong>Vigência:</strong>{{$item->validity}}
                                        @if (!empty($item->validity)) meses @endif
                                    </div>
                                </div>                               
                                <hr>
                                <div class="my-2">
                                    <h6 class="text-lg font-semibold text-center">Lista de Itens</h6>
                                    <div class="my-2">
                                        <x-table.table>
                                            @slot('thead')
                                                <x-table.td>Cód.</x-table.td>
                                                <x-table.td>Nome Produto</x-table.td>
                                                <x-table.td>Quant. Total</x-table.td>
                                            @endslot
                                            @foreach ($dbSupplyProcessItems as $dbSupplyProcessItem)
                                                @if ($item->id == $dbSupplyProcessItem->process_id)
                                                    @slot('tbody')
                                                        <x-table.tr>
                                                            <x-table.td>{{$dbSupplyProcessItem->Product->code ?? ""}}</x-table.td>
                                                            <x-table.td>{{$dbSupplyProcessItem->Product->title ?? ""}}</x-table.td>
                                                            <x-table.td>{{$dbSupplyProcessItem->amount_adm + $dbSupplyProcessItem->amount_atb + $dbSupplyProcessItem->amount_mac + $dbSupplyProcessItem->amount_vsan + $dbSupplyProcessItem->amount_vepd ?? ""}}</x-table.td>
                                                        </x-table.tr>
                                                    @endslot
                                                @endif
                                            @endforeach
                                        </x-table.table>
                                    </div>
                                </div>
                            </div>
                    </x-button.minButtonModalInfo>
                    <x-button.minButtonShow route="{{route('supply_processes.show',['supply_process'=>$item->id])}}" />
                </x-table.td>
            </tr>
        @endforeach
    @endslot
</x-table.table>