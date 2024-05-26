<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Entrada de Suprimento" 
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
            @include('inventory.inventory_warehouse.partials.entry.inventory_warehouse_entry_table')  
        </div>
    @endslot
    
</x-pages.index>