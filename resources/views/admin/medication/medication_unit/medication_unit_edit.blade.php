<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('medication_units.update',['medication_unit'=>$db->id])}}" btnBack="{{route('medication_units.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Apresentação de Medicamento: {{ $db->title }}"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')        
        @include('admin.medication.medication_unit.partials.medication_unit_form')
    @endslot
</x-pages.forms>
