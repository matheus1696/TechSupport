<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Lista de Estoques de Medicamentos"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('inventory.inventory_pharmacy.partials.index.inventory_pharmacy_index_search')
        @include('inventory.inventory_pharmacy.partials.index.inventory_pharmacy_index_table')
    @endslot
    
</x-pages.index>