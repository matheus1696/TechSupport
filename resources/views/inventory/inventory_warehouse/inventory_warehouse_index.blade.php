<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Estoque de Suprimentos"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('inventory.inventory_warehouse.partials.index.inventory_warehouse_index_search')
        @include('inventory.inventory_warehouse.partials.index.inventory_warehouse_index_table')
    @endslot
    
</x-pages.index>