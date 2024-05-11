<x-pages.forms method="create" route="{{route('product_units.store')}}" btnBack="{{route('product_units.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Cadastrar Apresentação do Produto"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')        
        @include('admin.product.product_unit.partials.product_unit_form')
    @endslot
    
</x-pages.forms>
