<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Lista de Estoques"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('inventory.inventory.partials.inventory_search')
        @include('inventory.inventory.partials.inventory_table')
    @endslot
    
</x-pages.index>