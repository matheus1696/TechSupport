<x-conteiner>
    <x-table.table>
        @slot('thead')
            <tr>
                <td class="text-sm col-lg-2">Produto</td>
                <td class="text-sm col-lg-1">Qt. ADM</td>
                <td class="text-sm col-lg-1">Qt. ATB</td>
                <td class="text-sm col-lg-1">Qt. MAC</td>
                <td class="text-sm col-lg-1">Qt. V. EPD</td>
                <td class="text-sm col-lg-1">Qt. V. SAN</td>
                <td class="text-sm col-lg-1">Total</td>
                <td class="text-sm col-lg-1">Un. Medida</td>
                <td class="text-sm col-lg-1">Garantia</td>
                <td class="text-sm col-lg-2">Ações</td>
            </tr>
        @endslot

        @slot('tbody')
            @foreach ($dbBiddingItens as $item)
                <tr>
                    <td class="text-center">{{$item->Product->title}}</td>
                    <td class="text-center">{{$item->amount_adm}}</td>
                    <td class="text-center">{{$item->amount_atb}}</td>
                    <td class="text-center">{{$item->amount_mac}}</td>
                    <td class="text-center">{{$item->amount_vepd}}</td>
                    <td class="text-center">{{$item->amount_vsan}}</td>
                    <td class="text-center">{{$item->amount_adm + $item->amount_atb + $item->amount_mac + $item->amount_vepd + $item->amount_vsan}}</td>
                    <td class="text-center">{{$item->ProductUnit->title}}</td>
                    <td class="text-center">
                        {{$item->warranty}} meses</td>
                    <td class="text-center">
                        <x-button.minButtonModalInfo id="BiddingItens{{$item->id}}" title="Informação do Produto">
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
                        <x-button.minButtonEdit route="{{route('biddingItens.edit',['biddingItem'=>$item->id])}}"/>
                        <x-button.minButtonDelete route="{{route('biddingItens.destroy',['biddingItem'=>$item->id])}}"/>
                    </td>
                </tr>
            @endforeach
        @endslot
    </x-table.table>

</x-conteiner>