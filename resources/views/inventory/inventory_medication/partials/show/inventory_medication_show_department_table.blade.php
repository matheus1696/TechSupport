
<h3 class="pt-3 text-lg font-semibold text-center">Estoque Atual</h3>


<div class="my-3">
    <x-table.table>
        @slot('thead')
            <x-table.th>Medicamento</x-table.th>            
            <x-table.th class="w-40">Tipo</x-table.th>
            <x-table.th class="w-40">Apresentação</x-table.th>
            <x-table.th class="w-40">Quantidade</x-table.th>
        @endslot
    
        <!-- Components TBody -->
        @slot('tbody')
            @foreach ($dbInventories as $dbInventory)
                <x-table.tr>
                    <x-table.td>{{$dbInventory->Medication->title}}</x-table.td>
                    <x-table.td>{{$dbInventory->Medication->MedicationType->title}}</x-table.td>
                    <x-table.td>{{$dbInventory->Medication->MedicationUnit->title}}</x-table.td>
                    <x-table.td>{{$dbInventory->quantity}}</x-table.td>
                </x-table.tr>
            @endforeach
        @endslot
    </x-table.table>
</div>