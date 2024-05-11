<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('medication_types.update',['medication_type'=>$db->id])}}" btnBack="{{route('medication_types.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Tipos de Medicamento: {{ $db->title }}"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')        
        @include('admin.medication.medication_type.partials.medication_type_form')
    @endslot
</x-pages.forms>
