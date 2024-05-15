<!-- Components Table -->
<x-table.table :db="$db">
    <!-- Components THead -->
    @slot('thead')
        <x-table.th class="w-28">Nota Fiscal</x-table.th>
        <x-table.th class="w-28">O.F.</x-table.th>
        <x-table.th class="w-40">Fornecedor</x-table.th>
        <x-table.th class="w-40">Bloco Financeiro</x-table.th>
        <x-table.th>Produto</x-table.th>
        <x-table.th class="w-28">Quantidade</x-table.th>
        <x-table.th class="w-28"></x-table.th>
    @endslot

    <!-- Components TBody -->
    @slot('tbody')
        @foreach ($db as $item)
            <x-table.tr>
                <x-table.td>{{$item->invoice}}</x-table.td>
                <x-table.td>{{$item->supply_order}}</x-table.td>
                <x-table.td>{{$item->supply_company}}</x-table.td>
                <x-table.td>{{$item->CompanyFinancialBlock->acronym}}</x-table.td>
                <x-table.td>{{$item->Product->title}}</x-table.td>
                <x-table.td>{{$item->quantity}}</x-table.td>
                <x-table.td>
                    <x-button.minButtonEdit route="{{route('inventory_warehouse_entries.edit',['inventory_warehouse_entry'=>$item->id])}}" />
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>