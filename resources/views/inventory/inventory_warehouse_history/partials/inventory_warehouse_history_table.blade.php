<!-- Components Table -->
<x-table.table :db="$db">
    <!-- Components THead -->
    @slot('thead')
        <x-table.th class="w-28">Data</x-table.th>
        <x-table.th class="w-28">Movimentação</x-table.th>
        <x-table.th class="w-28">Nota Fiscal</x-table.th>
        <x-table.th class="w-28">O.F.</x-table.th>
        <x-table.th class="w-28">Bloco de Financiamento</x-table.th>
        <x-table.th>Produto</x-table.th>
        <x-table.th class="w-28">Quantidade</x-table.th>
        <x-table.th class="w-60">Usuário Cadastrante</x-table.th>
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
                <x-table.td>{{$item->invoice}}</x-table.td>
                <x-table.td>{{$item->supply_order}}</x-table.td>
                <x-table.td>{{$item->CompanyFinancialBlock->acronym}}</x-table.td>
                <x-table.td>{{$item->Product->title}}</x-table.td>
                <x-table.td>{{$item->quantity}}</x-table.td>
                <x-table.td>{{$item->User->name}}</x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>