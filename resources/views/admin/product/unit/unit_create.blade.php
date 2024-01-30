<!-- Inicio de Componentização Page Create -->
<x-pages.forms method="create" route="{{route('units.store')}}" btnBack="{{route('units.index')}}">
        
    <!-- Slot Header -->
    @slot('header')
       <x-header title="Unidades de Medidas"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('admin.product.unit.partials.unit_form')
    @endslot

</x-pages.forms>