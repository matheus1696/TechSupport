<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('consumables.update',['consumable_type'=>$db->id])}}" btnBack="{{route('consumables.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Editar de Tipos de Suprimentos: {{ $db->title }}"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')        
        @include('admin.consumable.consumables.partials.consumables_form')
    @endslot
</x-pages.forms>
