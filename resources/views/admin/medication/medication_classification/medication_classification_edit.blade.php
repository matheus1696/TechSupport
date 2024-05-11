<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('medication_classifications.update',['medication_classification'=>$db->id])}}" btnBack="{{route('medication_classifications.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Classificação do Medicamento: {{ $db->title }}"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')        
        @include('admin.medication.medication_classification.partials.medication_classification_form')
    @endslot
</x-pages.forms>
