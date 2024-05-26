<x-pages.index>
    
    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Entrada de Suprimentos Avulsa"
            routeBack="{{route('inventory_warehouses.show', ['inventory_warehouse'=>$db->id])}}"
        />
    @endslot
    
    <!-- Slot Body -->
    @slot('body')        
        @include('inventory.inventory_warehouse.partials.create.inventory_warehouse_create_form')
        @include('inventory.inventory_warehouse.partials.create.inventory_warehouse_create_table')
    @endslot
    
</x-pages.index>