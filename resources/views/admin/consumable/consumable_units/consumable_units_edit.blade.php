<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('consumable_units.update',['consumable_unit'=>$db->id])}}" btnBack="{{route('consumable_units.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Editar de Tipos de Suprimentos: {{ $db->title }}"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')        
        @include('admin.consumable.consumable_units.partials.consumable_units_form')
    @endslot
</x-pages.forms>
