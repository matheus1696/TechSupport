<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Estoque de Suprimentos"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('inventory.inventory_supply.partials.index.inventory_supply_index_search')
        @include('inventory.inventory_supply.partials.index.inventory_supply_index_table')
    @endslot
    
</x-pages.index>