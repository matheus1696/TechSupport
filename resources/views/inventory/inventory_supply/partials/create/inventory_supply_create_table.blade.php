
<h3 class="py-3 text-lg font-semibold text-center">Últimos cadastros realizados</h3>

<!-- Components Table -->
<x-table.table>
    <!-- Components THead -->
    @slot('thead')
        <x-table.th class="w-40">Data</x-table.th>
        <x-table.th class="w-40">Movimentação</x-table.th>
        <x-table.th>Produto</x-table.th>
        <x-table.th class="w-28">Quantidade</x-table.th>
        <x-table.th class="w-60">Usuário Cadastrante</x-table.th>
    @endslot

    <!-- Components TBody -->
    @slot('tbody')
        @foreach ($dbInventoryHistories as $dbInventoryHistory)
            <x-table.tr>
                <x-table.td>{{date('d/m/Y h:m:s',strtotime($dbInventoryHistory->created_at))}}</x-table.td>
                <x-table.td>{{$dbInventoryHistory->movement}}
                    @if ($dbInventoryHistory->movement === "Entrada")
                        <i class="px-2 text-green-500 rotate-45 fas fa-long-arrow-alt-up"></i>
                    @endif
                    @if ($dbInventoryHistory->movement === "Saída")
                        <i class="px-2 text-red-500 rotate-45 fas fa-long-arrow-alt-down"></i>
                    @endif
                </x-table.td>
                <x-table.td>{{$dbInventoryHistory->Supply->title}}</x-table.td>
                <x-table.td>{{$dbInventoryHistory->quantity}}</x-table.td>
                <x-table.td>{{$dbInventoryHistory->User->name}}</x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>