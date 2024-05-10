<div class="my-3">
    <x-table.table>
        @slot('thead')
            <x-table.th>Produto</x-table.th>            
            <x-table.th class="w-40">Apresentação</x-table.th>
            <x-table.th class="w-40">Quantidade</x-table.th>
        @endslot
    
        <!-- Components TBody -->
        @slot('tbody')
            @foreach ($dbInventories as $dbInventory)
                <x-table.tr>
                    <x-table.td>{{$dbInventory->Consumables->consumable}}</x-table.td>
                    <x-table.td>{{$dbInventory->Consumables->ConsumableUnits->title}}</x-table.td>
                    <x-table.td>{{$dbInventory->quantity}}</x-table.td>
                </x-table.tr>
            @endforeach
        @endslot
    </x-table.table>
</div>