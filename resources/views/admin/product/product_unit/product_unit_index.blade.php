<x-pages.index>
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Tipos de Unidades" route="{{ route('product_units.create') }}"/>
    @endslot
        
    <!-- Slot Body -->
    @slot('body')
        @include('admin.product.product_unit.partials.product_unit_table')
    @endslot
</x-pages.index>
