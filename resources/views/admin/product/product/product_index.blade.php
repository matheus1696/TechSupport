<x-pages.index>
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Produtos" route="{{ route('products.create') }}"/>
    @endslot
        
    <!-- Slot Body -->
    @slot('body')
        @include('admin.product.product.partials.product_table')
    @endslot
</x-pages.index>
