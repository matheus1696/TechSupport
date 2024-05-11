<x-pages.forms method="create" route="{{route('products.store')}}" btnBack="{{route('products.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Cadastro de Tipos de Suprimentos"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')        
        @include('admin.product.product.partials.product_form')
    @endslot
    
</x-pages.forms>
