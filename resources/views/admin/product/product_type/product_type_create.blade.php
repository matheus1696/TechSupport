<x-pages.forms method="create" route="{{route('product_types.store')}}" btnBack="{{route('product_types.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Cadastro de Tipos de Suprimentos"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')        
        @include('admin.product.product_type.partials.product_type_form')
    @endslot
    
</x-pages.forms>
