<x-pages.index>
    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Suprimentos" 
            routeCreate="{{ route('supplies.create') }}"
        />
    @endslot
        
    <!-- Slot Body -->
    @slot('body')
        @include('admin.supply.supply.partials.supply_table')
    @endslot
</x-pages.index>
