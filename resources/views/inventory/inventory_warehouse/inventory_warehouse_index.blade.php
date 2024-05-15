<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Centros de Distribuições"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('inventory.inventory_warehouse.partials.inventory_warehouse_search')
        @include('inventory.inventory_warehouse.partials.inventory_warehouse_table')
    @endslot
    
</x-pages.index>