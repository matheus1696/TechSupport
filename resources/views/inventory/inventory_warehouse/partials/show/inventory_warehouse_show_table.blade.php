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
                        <x-button.minButtonModalInfo id="InventoryWarehouseModel{{$dbInventory->id}}" title="Descrição do Produto no Estoque: {{$dbInventory->Product->title}}">
                            <div>
                                <x-table.table>
                                    @slot('thead')
                                        <x-table.th>Nota Fiscal</x-table.th>
                                        <x-table.th>O.F</x-table.th>
                                        <x-table.th>Fornecedor</x-table.th>
                                        <x-table.th>Quantidade</x-table.th>
                                    @endslot

                                    @slot('tbody')
                                        @foreach ($dbInventoryEntries as $dbInventoryEntry)
                                            @if ($dbInventoryEntry->product_id === $dbInventory->product_id)
                                                @if ($dbInventoryEntry->financial_block_id === $dbInventory->financial_block_id)
                                                    <x-table.tr>
                                                        <x-table.td>{{$dbInventoryEntry->invoice}}</x-table.td>
                                                        <x-table.td>{{$dbInventoryEntry->supply_order}}</x-table.td>
                                                        <x-table.td>{{$dbInventoryEntry->supply_company}}</x-table.td>
                                                        <x-table.td>{{$dbInventoryEntry->quantity}}</x-table.td>
                                                    </x-table.tr>
                                                @endif
                                            @endif
                                        @endforeach
                                    @endslot
                                </x-table.table>
                            </div>
                        </x-button.minButtonModalInfo>
                    </x-table.td>
                    
                    
                </x-table.tr>
            @endforeach
        @endslot
    </x-table.table>
</div>