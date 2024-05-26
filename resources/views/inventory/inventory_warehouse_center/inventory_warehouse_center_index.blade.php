<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Centros de Distribuições"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('inventory.inventory_warehouse_center.partials.index.inventory_warehouse_center_index_search')
        @include('inventory.inventory_warehouse_center.partials.index.inventory_warehouse_center_index_table')
    @endslot
    
</x-pages.index>