<x-pages.forms method="create" route="{{route('medication_classifications.store')}}" btnBack="{{route('medication_classifications.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Cadastro de Classificação do Medicamento"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')        
        @include('admin.medication.medication_classification.partials.medication_classification_form')
    @endslot
    
</x-pages.forms>
