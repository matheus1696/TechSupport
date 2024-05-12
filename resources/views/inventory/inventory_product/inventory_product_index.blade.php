<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Lista de Estoques de Suprimentos"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('inventory.inventory_product.partials.inventory_product_search')
        @include('inventory.inventory_product.partials.inventory_product_table')
    @endslot
    
</x-pages.index>