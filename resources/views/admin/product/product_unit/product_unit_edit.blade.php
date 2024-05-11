<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('product_units.update',['product_unit'=>$db->id])}}" btnBack="{{route('product_units.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Editar de Tipos de Suprimentos: {{ $db->title }}"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')        
        @include('admin.product.product_unit.partials.product_unit_form')
    @endslot
</x-pages.forms>
