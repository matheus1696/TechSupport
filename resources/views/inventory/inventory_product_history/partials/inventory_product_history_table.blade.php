<!-- Components Table -->
<x-table.table :db="$db">
    <!-- Components THead -->
    @slot('thead')
        <x-table.th class="w-28">Data</x-table.th>
        <x-table.th class="w-40">Movimentação</x-table.th>
        <x-table.th>Produto</x-table.th>
        <x-table.th class="w-28">Quantidade</x-table.th>
        <x-table.th class="w-60">Pessoa Responsável</x-table.th>
        <x-table.th class="w-28"></x-table.th>
    @endslot

    <!-- Components TBody -->
    @slot('tbody')
        @foreach ($db as $item)
            <x-table.tr>
                <x-table.td>{{date('d/m/Y',strtotime($item->date))}}</x-table.td>
                <x-table.td>{{$item->movement}}
                    @if ($item->movement === "Entrada")
                        <i class="px-2 text-green-500 rotate-45 fas fa-long-arrow-alt-up"></i>
                    @endif
                    @if ($item->movement === "Saída")
                        <i class="px-2 text-red-500 rotate-45 fas fa-long-arrow-alt-down"></i>
                    @endif
                </x-table.td>
                <x-table.td>{{$item->Product->title}}</x-table.td>
                <x-table.td>{{$item->quantity}}</x-table.td>
                <x-table.td>{{$item->User->name}}</x-table.td>
                <x-table.td>
                    <x-button.minButtonEdit route="{{route('inventory_product_histories.edit',['inventory_product_history'=>$item->id])}}" />
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>