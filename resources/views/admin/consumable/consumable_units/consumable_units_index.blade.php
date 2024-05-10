<x-pages.index>
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Tipos de Unidades" route="{{ route('consumable_units.create') }}"/>
    @endslot
        
    <!-- Slot Body -->
    @slot('body')
        @include('admin.consumable.consumable_units.partials.consumable_units_table')
    @endslot
</x-pages.index>
