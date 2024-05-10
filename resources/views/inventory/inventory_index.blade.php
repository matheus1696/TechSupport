<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Lista de Estoques" route="{{route('inventories.create')}}"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('inventory.partials.inventory_search')
        @include('inventory.partials.inventory_table')
    @endslot
    
</x-pages.index>