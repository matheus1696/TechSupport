<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('attentions.update',['attention'=>$db->id])}}" btnBack="{{route('attentions.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Cadastrar Nível de Atenção" />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('admin.company.attentions.partials.attentions_form')        
    @endslot

</x-pages.forms>
