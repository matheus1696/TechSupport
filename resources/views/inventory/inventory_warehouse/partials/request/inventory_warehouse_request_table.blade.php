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
                <x-table.td>{{$dbInventoryHistory->Consumable->title}}</x-table.td>   
                <x-table.td>
                    @if (strtotime($dbInventoryHistory->date) < strtotime(date('Y-m-d')))                    
                        Atrasados
                    @else                    
                        Encaminhado para entrega                   
                    @endif
                </x-table.td>
                <x-table.td>{{$dbInventoryHistory->quantity}}</x-table.td>                                 
                <x-table.td>
                    <x-button.minButtonModalInfo id="InventoryWarehouseEntryStoreModel_{{$dbInventoryHistory->id}}" icon="" btnTitle="Indicar Recebimento" title="Descrição do Produto no Estoque: {{$dbInventoryHistory->Consumable->title}}">
                        <x-form.form method="create" route="{{route('inventory_warehouses.entryStore')}}" title="Confirmar Recebimento">
                            <input name="inventary_history" value="{{$dbInventoryHistory->id}}" hidden>
                            <x-form.input col="3" label="Nota Fiscal" name="invoice" id="invoice" value="{{$dbInventoryHistory->invoice}}" disabled="disabled"/>
                            <x-form.input col="3" label="Ordem de Fornecimento" name="supply_order" id="supply_order" value="{{$dbInventoryHistory->supply_order}}" disabled="disabled"/>
                            <x-form.input col="6" label="Fornecedor" name="supply_company" id="supply_company" value="{{$dbInventoryHistory->supply_company}}" disabled="disabled"/>
                            <x-form.input col="6" label="Suprimento" name="consumable_id" id="consumable_id" value="{{$dbInventoryHistory->Consumable->title}}" disabled="disabled"/>
                            <x-form.input col="3" label="Movimento" name="movement" id="movement" value="Entrada" disabled="disabled"/>
                            <x-form.input col="3" label="Quantidade" name="quantity" id="quantity" value="{{$dbInventoryHistory->quantity}}" disabled="disabled"/>
                            <x-form.input col="6" label="Estabelecimento Recebedor" name="establishment_id" id="establishment_id" value="{{$dbInventoryHistory->CompanyEstablishmentExit->establishment_exit_id}}" disabled="disabled"/>
                            <x-form.input col="6" label="Departamento Recebedor" name="establishment_department_id" id="establishment_department_id" value="{{$dbInventoryHistory->CompanyEstablishmentDepartmentExit->department_exit_id}}" disabled="disabled"/>                          
                        </x-form.form>
                    </x-button.minButtonModalInfo>
                </x-table.td> 
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>

  

