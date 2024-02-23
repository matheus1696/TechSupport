<x-conteiner>
    <x-table.table>
        @slot('thead')
            <tr>
                <td class="text-sm col-lg-3">Descrição</td>
                <td class="text-sm col-lg-1">Und.</td>
                <td class="text-sm col-lg-1">ADM</td>
                <td class="text-sm col-lg-1">ATB</td>
                <td class="text-sm col-lg-1">MAC</td>
                <td class="text-sm col-lg-1">VEPD</td>
                <td class="text-sm col-lg-1">VSAN</td>
                <td class="text-sm col-lg-1">Total</td>
                <td class="text-sm col-lg-2">Ações</td>
            </tr>
        @endslot

        @slot('tbody')
            @foreach ($dbSupplyProcessItems as $item)
                <tr>
                    <td class="text-center">{{$item->Product->title}}</td>
                    <td class="text-center">{{$item->ProductUnit->acronym}}</td>
                    <td class="text-center">{{$item->amount_adm}}</td>
                    <td class="text-center">{{$item->amount_atb}}</td>
                    <td class="text-center">{{$item->amount_mac}}</td>
                    <td class="text-center">{{$item->amount_vepd}}</td>
                    <td class="text-center">{{$item->amount_vsan}}</td>
                    <td class="text-center">{{$item->amount_adm + $item->amount_atb + $item->amount_mac + $item->amount_vepd + $item->amount_vsan}}</td>
                    <td class="text-center">
                        <x-button.minButtonModalInfo id="SupplyProcessItem{{$item->id}}" title="Informação do Produto">
                            <p><strong>Código do Produto:</strong> {{$item->Product->code_product}}</p>
                            <p><strong>Produto:</strong> {{$item->Product->title}}</p>
                            <div>
                                <strong>Descrição do Produto:</strong><br/>
                                {!! $item->Product->description !!}
                            </div>
                            <p>
                                <strong>Tipo do Produto:</strong>
                                @if ($item->Product->type === "Permanent") Permanente @endif
                                @if ($item->Product->type === "Consumption") Consumo @endif
                            </p>
                        </x-button.minButtonModalInfo>
                        <x-button.minButtonEdit route="{{route('supply_process_items.edit',['supply_process_item'=>$item->id])}}"/>
                        <x-button.minButtonDelete route="{{route('supply_process_items.destroy',['supply_process_item'=>$item->id])}}"/>
                    </td>
                </tr>
            @endforeach
        @endslot
    </x-table.table>

</x-conteiner>