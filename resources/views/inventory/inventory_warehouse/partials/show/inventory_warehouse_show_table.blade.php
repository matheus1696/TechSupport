<div class="my-3">
    <x-table.table>
        @slot('thead')
            <x-table.th>Produto</x-table.th>            
            <x-table.th class="w-32">Apresentação</x-table.th>
            <x-table.th class="w-32">Bloco Financeiro</x-table.th>
            <x-table.th class="w-32">Quantidade</x-table.th>
            <x-table.th class="w-20">Ações</x-table.th>
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
                                        <x-table.th></x-table.th>
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
                                                        <x-table.td>
                                                            <!-- Formulário -->
                                                            <div class="inline-block">
                                                                <!-- Modal toggle -->
                                                                <button 
                                                                    data-toggle="modal"
                                                                    data-target="#InventoryWarehouseExitModel{{$dbInventoryEntry->id}}"
                                                                    class="flex items-center px-2 py-1 m-1 text-sm text-white bg-red-600 rounded-lg shadow-md hover:bg-red-500" 
                                                                    type="button"
                                                                >
                                                                    <i class="pt-1 pr-1 rotate-45 text-white-500 fas fa-long-arrow-alt-down"></i>
                                                                    <span>Saída</span>
                                                                </button>
                                                            
                                                                <div class="modal fade" id="InventoryWarehouseExitModel{{$dbInventoryEntry->id}}" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
                                                                    <div class="text-left modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="text-lg font-semibold modal-title" id="Modal">Saída de Produto: {{$dbInventory->Product->title}}</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="m-4 modal-body">

                                                                                <x-form.form method="create" route="{{route('inventory_warehouses.exitStore')}}">

                                                                                        <input type="hidden" name="establishment_department_entry_id" value="{{$dbInventoryEntry->establishment_department_id}}">
                                                                                        <input type="hidden" name="establishment_entry_id" value="{{$dbInventoryEntry->establishment_id}}">
                                                                                        <input type="hidden" name="financial_block_id" value="{{$dbInventoryEntry->financial_block_id}}">
                                                                                        <input type="hidden" name="product_id" value="{{$dbInventoryEntry->product_id}}">
                                                                                        <input type="hidden" name="invoice" value="{{$dbInventoryEntry->invoice}}">
                                                                                        <input type="hidden" name="supply_order" value="{{$dbInventoryEntry->supply_order}}">
                                                                                        <input type="hidden" name="supply_company" value="{{$dbInventoryEntry->supply_company}}">

                                                                                        <x-form.input col="4" label="Nota Fiscal" name="disabled" id="disabled" value="{{$dbInventoryEntry->invoice}}" disabled="disabled"/>

                                                                                        <x-form.input col="4" label="O.F." name="disabled" id="disabled" value="{{$dbInventoryEntry->supply_order}}" disabled="disabled"/>

                                                                                        <x-form.input col="4" label="Fornecedor" name="disabled" id="disabled" value="{{$dbInventoryEntry->supply_company}}" disabled="disabled"/>

                                                                                        <x-form.input col="6" label="Produto" name="disabled" id="disabled" value="{{$dbInventoryEntry->Product->title}}" disabled="disabled"/>

                                                                                        <x-form.select col="6" label="Estabelecimento Recebedor" name="establishment_department_exit_id" id="establishment_department_exit_id_{{$dbInventoryEntry->id}}">
                                                                                            @foreach ($dbEstablishmentDepartments as $dbEstablishmentDepartment)
                                                                                                <option value="{{$dbEstablishmentDepartment->id}}">
                                                                                                    {{$dbEstablishmentDepartment->CompanyEstablishment->title}} - 
                                                                                                    {{$dbEstablishmentDepartment->department}}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        </x-form.select>
                                                                                    
                                                                                        <x-form.input col="3" label="Data" type="date" name="date" id="date" value="{{date('Y-m-d')}}" max="{{date('Y-m-d')}}" min="{{date('1900-01-01')}}" required="required"/>

                                                                                        <x-form.input col="3" label="Apresentação" name="disabled" id="disabled" value="{{$dbInventoryEntry->Product->ProductUnit->title}}" disabled="disabled"/>
                                                                                    
                                                                                        <x-form.input col="3" label="Quantidade Estoque" name="disabled" id="disabled" value="{{$dbInventoryEntry->quantity}}" disabled="disabled"/>
                                                                                        
                                                                                        <x-form.input col="3" label="Quantidade" type="number" name="quantity" id="quantity" min="0" required="required"/>
                                                                                    
                                                                                        <x-form.textarea col="12" label="Descrição da Movimentação" name="description" id="description" value="{{$db->description ?? ''}}"/>
                                                                                            
                                                                                </x-form.form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </x-table.td>
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