<div class="my-3">
    <x-table.table>
        @slot('thead')
            <x-table.th>Produto</x-table.th>            
            <x-table.th class="w-32">Apresentação</x-table.th>
            <x-table.th class="w-32">Bloco Financeiro</x-table.th>
            <x-table.th class="w-32">Quantidade</x-table.th>
            <x-table.th class="w-20"></x-table.th>
        @endslot
    
        <!-- Components TBody -->
        @slot('tbody')
            @foreach ($dbInventories as $dbInventory)
                <x-table.tr>
                    <x-table.td>{{$dbInventory->Product->title}}</x-table.td>
                    <x-table.td>{{$dbInventory->Product->ProductUnit->title}}</x-table.td>
                    <x-table.td>{{$dbInventory->CompanyFinancialBlock->acronym}}</x-table.td>
                    <x-table.td>{{$dbInventory->quantity}}</x-table.td>
                    <x-table.td>
                        <x-button.minButtonShow route="{{route('inventory_warehouse_entries.show',['inventory_warehouse_entry'=>$dbInventory->id])}}" />
                    </x-table.td>
                </x-table.tr>
            @endforeach
        @endslot
    </x-table.table>
</div>