<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('medications.update',['medication'=>$db->id])}}" btnBack="{{route('medications.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Medicamento: {{ $db->title }}"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')        
        @include('admin.medication.medication.partials.medication_form')
    @endslot
</x-pages.forms>
