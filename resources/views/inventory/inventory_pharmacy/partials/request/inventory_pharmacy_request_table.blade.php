<!-- Components Table -->
<x-table.table :db="$dbInventoryHistories">
    <!-- Components THead -->
    @slot('thead')
        <x-table.th class="w-28">Data</x-table.th>
        <x-table.th>Produto</x-table.th>
        <x-table.th class="w-24">Status</x-table.th>
        <x-table.th class="w-24">Quantidade</x-table.th>
        <x-table.th class="w-20">Recebido?</x-table.th>
    @endslot

    <!-- Components TBody -->
    @slot('tbody')
        @foreach ($dbInventoryHistories as $dbInventoryHistory)
            <x-table.tr>
                <x-table.td>{{date('d/m/Y',strtotime($dbInventoryHistory->date))}}</x-table.td>
                <x-table.td>{{$dbInventoryHistory->Medication->title}}</x-table.td>   
                <x-table.td>
                    @if (strtotime($dbInventoryHistory->date) < strtotime(date('Y-m-d')))                    
                        Atrasados
                    @else                    
                        Encaminhado para entrega                   
                    @endif
                </x-table.td>
                <x-table.td>{{$dbInventoryHistory->quantity}}</x-table.td>                                 
                <x-table.td>
                    @if (strtotime($dbInventoryHistory->date) < strtotime(date('Y-m-d')))                    
                        <x-button.buttonStatus condition="False" name="has_inventory_pharmacy" route="{{route('inventory_pharmacies.entryStore')}}" title="Indicar Recebimento" btnColor="yellow" method="create">
                            <input name="inventary_history" value="{{$dbInventoryHistory->id}}" hidden>
                            <input name="invoice" value="{{$dbInventoryHistory->invoice}}" hidden>
                            <input name="supply_order" value="{{$dbInventoryHistory->supply_order}}" hidden>
                            <input name="supply_company" value="{{$dbInventoryHistory->supply_company}}" hidden>
                            <input name="movement" value="Entrada" hidden>
                            <input name="quantity" value="{{$dbInventoryHistory->quantity}}" hidden>
                            <input name="medication_id" value="{{$dbInventoryHistory->medication_id}}" hidden>
                            <input name="establishment_id" value="{{$dbInventoryHistory->establishment_exit_id}}" hidden>
                            <input name="establishment_department_id" value="{{$dbInventoryHistory->department_exit_id}}" hidden>
                        </x-button.buttonStatus> 
                    @else
                        <x-button.buttonStatus condition="False" name="has_inventory_supply" route="{{route('inventory_pharmacies.entryStore')}}" title="Indicar Recebimento" method="create">
                            <input name="inventary_history" value="{{$dbInventoryHistory->id}}" hidden>
                            <input name="invoice" value="{{$dbInventoryHistory->invoice}}" hidden>
                            <input name="supply_order" value="{{$dbInventoryHistory->supply_order}}" hidden>
                            <input name="supply_company" value="{{$dbInventoryHistory->supply_company}}" hidden>
                            <input name="movement" value="Entrada" hidden>
                            <input name="quantity" value="{{$dbInventoryHistory->quantity}}" hidden>
                            <input name="medication_id" value="{{$dbInventoryHistory->medication_id}}" hidden>
                            <input name="establishment_id" value="{{$dbInventoryHistory->establishment_exit_id}}" hidden>
                            <input name="establishment_department_id" value="{{$dbInventoryHistory->department_exit_id}}" hidden>
                        </x-button.buttonStatus>                    
                    @endif
                </x-table.td> 
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>

  

