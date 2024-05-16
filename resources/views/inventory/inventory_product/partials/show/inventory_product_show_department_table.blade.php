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
                    <x-table.td>{{$dbInventory->Product->title}}</x-table.td>
                    <x-table.td>{{$dbInventory->Product->ProductType->title}}</x-table.td>
                    <x-table.td>{{$dbInventory->Product->ProductUnit->title}}</x-table.td>
                    <x-table.td>{{$dbInventory->quantity}}</x-table.td>
                    <x-table.td>
                        <div class="inline-block">
                            <!-- Modal toggle -->
                            <button 
                                data-toggle="modal"
                                data-target="#modalInfo{{$dbInventory->id}}"
                                class="px-2 py-1 m-1 text-sm text-white bg-red-600 rounded-lg shadow-md hover:bg-red-500 flex items-center" 
                                type="button"
                            >
                                <i class="pr-1 pt-1 text-white-500 rotate-45 fas fa-long-arrow-alt-down"></i>
                                <span>Saída</span>
                            </button>
                        
                            <div class="modal fade" id="modalInfo{{$dbInventory->id}}" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
                                <div class="text-left modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-lg font-semibold" id="Modal">Saída de Produto: {{$dbInventory->Product->title}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="m-4 modal-body">
                                            <form method="POST" action="{{route('inventory_product_histories.store')}}">
                                                @csrf
                                            
                                                <div class="grid grid-cols-12 gap-6">
                                                    <input type="hidden" name="establishment_department_id" value="{{$db->id}}">
                                                    <input type="hidden" name="establishment_id" value="{{$db->establishment_id}}">
                                                    <input type="hidden" name="product_id" value="{{$dbInventory->product_id}}">
                                                    <input type="hidden" name="movement" value="Saída">

                                                    <x-form.input col="12" label="Produto" id="disabled" value="{{$dbInventory->Product->title}}" disabled="disabled"/>
                                                
                                                    <x-form.input col="3" label="Data" type="date" id="date" value="{{date('Y-m-d')}}" max="{{date('Y-m-d')}}" min="{{date('1900-01-01')}}" required="required"/>

                                                    <x-form.input col="3" label="Apresentação" id="disabled" value="{{$dbInventory->Product->ProductUnit->title}}" disabled="disabled"/>
                                                
                                                    <x-form.input col="3" label="Quantidade Estoque" id="inventaryQuantity" value="{{$dbInventory->quantity}}" disabled="disabled"/>
                                                    
                                                    <x-form.input col="3" label="Quantidade" type="number" id="quantity" min="0" required="required"/>
                                                
                                                    <x-form.textarea col="12" label="Descrição da Movimentação" id="description" value="{{$db->description ?? ''}}"/>
                                                </div>

                                                <div class="w-full">
                                                    <button type="submit" class="w-full my-2 text-sm text-white transition duration-300 rounded-lg shadow-md bg-sky-600 h-9 hover:bg-sky-700">Saída de Produto</button>
                                                </div>
                                            </form>
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