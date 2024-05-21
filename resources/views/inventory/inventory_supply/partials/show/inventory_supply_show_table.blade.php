<div class="my-3">
    <x-table.table>
        @slot('thead')
            <x-table.th>Produto</x-table.th>            
            <x-table.th class="w-40">Tipo</x-table.th>
            <x-table.th class="w-40">Apresentação</x-table.th>
            <x-table.th class="w-40">Quantidade</x-table.th>
            <x-table.th class="w-32"></x-table.th>
        @endslot
    
        <!-- Components TBody -->
        @slot('tbody')
            @foreach ($dbInventories as $dbInventory)
                <x-table.tr>
                    <x-table.td>{{$dbInventory->Supply->title}}</x-table.td>
                    <x-table.td>{{$dbInventory->Supply->SupplyType->title}}</x-table.td>
                    <x-table.td>{{$dbInventory->Supply->SupplyUnit->title}}</x-table.td>
                    <x-table.td>{{$dbInventory->quantity}}</x-table.td>
                    <x-table.td>
                        <div class="inline-block">
                            <!-- Modal toggle -->
                            <button 
                                data-toggle="modal"
                                data-target="#modalInfo_{{$dbInventory->id}}"
                                class="flex items-center px-2 py-1 m-1 text-sm text-white bg-red-600 rounded-lg shadow-md hover:bg-red-500" 
                                type="button"
                            >
                                <i class="pt-1 pr-1 rotate-45 text-white-500 fas fa-long-arrow-alt-down"></i>
                                <span>Saída</span>
                            </button>
                        
                            <div class="modal fade" id="modalInfo_{{$dbInventory->id}}" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
                                <div class="text-left modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="text-lg font-semibold modal-title" id="Modal">Saída de Produto: {{$dbInventory->Supply->title}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="m-4 modal-body">
                                            <x-form.form method="create" route="{{route('inventory_supplies.exitStore')}}">
                                                
                                                <input hidden name="invoice" value="{{$dbInventory->invoice}}">
                                                <input hidden name="supply_order" value="{{$dbInventory->supply_order}}">
                                                <input hidden name="supply_company" value="{{$dbInventory->supply_company}}">
                                                <input hidden name="establishment_department_id" value="{{$db->id}}">
                                                <input hidden name="establishment_id" value="{{$db->establishment_id}}">
                                                <input hidden name="supply_id" value="{{$dbInventory->supply_id}}">

                                                <x-form.input col="12" label="Suprimento" name="disabled" value="{{$dbInventory->Supply->title}}" disabled="disabled"/>
                                            
                                                <x-form.input col="3" label="Data" type="date" id="date" name="date" value="{{date('Y-m-d')}}" max="{{date('Y-m-d')}}" min="{{date('1900-01-01')}}" required="required"/>

                                                <x-form.input col="3" label="Apresentação" name="disabled" value="{{$dbInventory->Supply->SupplyUnit->title}}" disabled="disabled"/>
                                            
                                                <x-form.input col="3" label="Quantidade Estoque" name="inventaryQuantity" id="inventaryQuantity" value="{{$dbInventory->quantity}}" disabled="disabled"/>
                                                
                                                <x-form.input col="3" label="Quantidade" type="number" id="quantity" name="quantity" min="0" required="required"/>
                                            
                                                <x-form.textarea col="12" label="Descrição da Movimentação" id="description" name="description" value="{{$db->description ?? ''}}"/>
                                            
                                            </x-form.form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </x-table.td>
                </x-table.tr>
            @endforeach
        @endslot
    </x-table.table>
</div>