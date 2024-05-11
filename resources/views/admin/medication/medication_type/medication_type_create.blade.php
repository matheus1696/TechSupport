<x-pages.forms method="create" route="{{route('medication_types.store')}}" btnBack="{{route('medication_types.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Cadastrar Tipo de Medicamento"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')        
        @include('admin.medication.medication_type.partials.medication_type_form')
    @endslot
    
</x-pages.forms>
