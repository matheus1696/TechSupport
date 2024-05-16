<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Estoque das Unidades"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('inventory.inventory_product.partials.index.inventory_product_index_search')
        @include('inventory.inventory_product.partials.index.inventory_product_index_table')
    @endslot
    
</x-pages.index>