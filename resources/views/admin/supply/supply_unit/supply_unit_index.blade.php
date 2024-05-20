<x-pages.index>
    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Apresentação dos Suprimentos" 
            routeCreate="{{ route('supply_units.create') }}"
        />
    @endslot
        
    <!-- Slot Body -->
    @slot('body')
        @include('admin.supply.supply_unit.partials.supply_unit_table')
    @endslot
</x-pages.index>
