<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('product_types.update',['product_type'=>$db->id])}}" btnBack="{{route('product_types.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Tipos de Produto: {{ $db->title }}"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')        
        @include('admin.product.product_type.partials.product_type_form')
    @endslot
</x-pages.forms>
