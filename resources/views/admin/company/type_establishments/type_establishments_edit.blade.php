<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('type_establishments.update',['type_establishment'=>$db->id])}}" btnBack="{{route('type_establishments.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Editar de Tipos de Estabelecimento: {{ $db->title }}"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')        
        @include('admin.company.type_establishments.partials.type_establishments_form')
    @endslot
</x-pages.forms>
