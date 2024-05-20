<x-pages.index>
    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Tipo dos Suprimentos" 
            routeCreate="{{ route('supply_types.create') }}"
        />
    @endslot
        
    <!-- Slot Body -->
    @slot('body')
        @include('admin.supply.supply_type.partials.supply_type_table')
    @endslot
</x-pages.index>
