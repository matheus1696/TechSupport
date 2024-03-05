<!-- Inicio de Componentização Page Index -->
<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Lista de Produtos" route="{{ route('products.create') }}"/>
    @endslot

    @slot('body')
        @include('admin.product.product.partials.product_search')
        @include('admin.product.product.partials.product_table')
    @endslot
</x-pages.index>