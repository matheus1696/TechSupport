<x-pages.index>
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Tipos de Produtos" route="{{ route('product_types.create') }}"/>
    @endslot
        
    <!-- Slot Body -->
    @slot('body')
        @include('admin.product.product_type.partials.product_type_table')
    @endslot
</x-pages.index>
