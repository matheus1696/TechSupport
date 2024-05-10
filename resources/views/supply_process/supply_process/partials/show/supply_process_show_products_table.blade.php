<x-table.table>
    @slot('thead')
        <x-table.td>Descrição</x-table.td>
        <x-table.td class="w-28">Und.</x-table.td>
        <x-table.td class="w-28">Total</x-table.td>
        <x-table.td class="w-40"></x-table.td>
    @endslot

    @slot('tbody')
        @foreach ($dbSupplyProcessItems as $item)
            <x-table.tr>
                <x-table.td>{{$item->Product->title}}</x-table.td>
                <x-table.td>{{$item->ProductUnit->acronym}}</x-table.td>
                <x-table.td> </x-table.td>
                <x-table.td>
                    <x-button.minButtonModalInfo id="SupplyProcessItem{{$item->id}}" title="Informação do Produto">
                        <div class="grid grid-cols-1 gap-3">
                            <p><strong>Código do Produto:</strong> {{$item->Product->code}}</p>
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
                        </div>
                    </x-button.minButtonModalInfo>
                    <x-button.minButtonEdit route="{{route('supply_process_items.edit',['supply_process_item'=>$item->id])}}"/>
                    <x-button.minButtonDelete route="{{route('supply_process_items.destroy',['supply_process_item'=>$item->id])}}"/>
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>