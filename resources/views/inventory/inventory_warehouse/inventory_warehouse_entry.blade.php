<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Entrada de Produto: {{$db->department}} - {{$db->CompanyEstablishment->title}}" 
            routeBack="{{route('inventory_warehouses.show',['inventory_warehouse'=>$db->id])}}"            
        />
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        <x-conteiner>            
            @include('inventory.inventory_warehouse.partials.entry.inventory_warehouse_entry_form')
        </x-conteiner>

        <hr>

        <div>
            <h3 class="py-3 text-lg font-semibold text-center">Últimos Cadastros</h3>
            @include('inventory.inventory_warehouse.partials.entry.inventory_warehouse_entry_table')  
        </div>      
        
        <div class="pt-2">
            <p class="pr-3 text-xs text-end">
                <a href="{{route('inventory_warehouses.history',['inventory_warehouse'=>$db->id])}}" class="text-gray-400 hover:text-gray-900">Verificar Histórico de Movimentação</a>
            </p>
        </div>
    @endslot
    
</x-pages.index>