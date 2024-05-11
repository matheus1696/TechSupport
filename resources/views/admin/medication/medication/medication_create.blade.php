<x-pages.forms method="create" route="{{route('medications.store')}}" btnBack="{{route('medications.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Cadastro de Medicamento"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')        
        @include('admin.medication.medication.partials.medication_form')
    @endslot
    
</x-pages.forms>
