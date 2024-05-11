<x-pages.index>
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Classificação do Produto" route="{{ route('product_classifications.create') }}"/>
    @endslot
        
    <!-- Slot Body -->
    @slot('body')
        @include('admin.product.product_classification.partials.product_classification_table')
    @endslot
</x-pages.index>
