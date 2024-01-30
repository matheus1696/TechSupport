<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('units.update',['unit'=>$db->id])}}" btnBack="{{route('units.index')}}">
    
    <!-- Slot Header -->
    @slot('header')
       <x-header title="Unidades de Medidas"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('admin.product.unit.partials.unit_form')
    @endslot
</x-pages.forms>