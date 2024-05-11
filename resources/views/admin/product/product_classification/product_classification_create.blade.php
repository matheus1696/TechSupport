<x-pages.forms method="create" route="{{route('product_classifications.store')}}" btnBack="{{route('product_classifications.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Cadastrar Tipo de Produtos"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')        
        @include('admin.product.product_classification.partials.product_classification_form')
    @endslot
    
</x-pages.forms>
