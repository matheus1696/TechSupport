<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Lista de Estoques de Medicamentos"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('inventory.inventory_medication.partials.inventory_medication_search')
        @include('inventory.inventory_medication.partials.inventory_medication_table')
    @endslot
    
</x-pages.index>