<x-pages.forms method="create" route="{{route('medication_units.store')}}" btnBack="{{route('medication_units.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Cadastrar Apresentação de Medicamentos"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')        
        @include('admin.medication.medication_unit.partials.medication_unit_form')
    @endslot
    
</x-pages.forms>
