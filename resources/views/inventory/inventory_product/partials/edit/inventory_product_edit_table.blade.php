<!-- Components Table -->
<x-table.table :db="$dbInventoryHistories">
    <!-- Components THead -->
    @slot('thead')
        <x-table.th class="w-28">Data</x-table.th>
        <x-table.th>Produto</x-table.th>
        <x-table.th class="w-24">Quantidade</x-table.th>
        <x-table.th class="w-20">Recebido?</x-table.th>
    @endslot

    <!-- Components TBody -->
    @slot('tbody')
        @foreach ($dbInventoryHistories as $item)
            <x-table.tr>
                <x-table.td>{{$item->date}}</x-table.td>
                <x-table.td>{{$item->Product->title}}</x-table.td>
                <x-table.td>{{$item->quantity}}</x-table.td>                                   
                <x-table.td>
                    @if ($item->date < today())
                        {{today()}} - {{$item->date}}
                    @else
                        Em dia
                    @endif
                        <x-button.buttonStatus condition="False" name="has_inventory_product" route="{{route('inventory_product_histories.store')}}">
                            <input name="inventary_history" value="{{$item->id}}" hidden>
                            <input name="invoice" value="{{$item->invoice}}" hidden>
                            <input name="supply_order" value="{{$item->supply_order}}" hidden>
                            <input name="supply_company" value="{{$item->supply_company}}" hidden>
                            <input name="movement" value="Entrada" hidden>
                            <input name="quantity" value="{{$item->quantity}}" hidden>
                            <input name="product_id" value="{{$item->product_id}}" hidden>
                            <input name="establishment_id" value="{{$item->establishment_exit_id}}" hidden>
                            <input name="establishment_department_id" value="{{$item->establishment_department_exit_id}}" hidden>
                        </x-button.buttonStatus>
                </x-table.td> 
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>

  

