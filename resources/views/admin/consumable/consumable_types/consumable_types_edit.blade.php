<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('consumable_types.update',['consumable_type'=>$db->id])}}" btnBack="{{route('consumable_types.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Editar de Tipos de Suprimentos: {{ $db->title }}"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')        
        @include('admin.consumable.consumable_types.partials.consumable_types_form')
    @endslot
</x-pages.forms>
