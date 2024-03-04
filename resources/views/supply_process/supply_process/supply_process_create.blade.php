<!-- Inicio de Componentização Page Create -->
<x-pages.forms method="create" route="{{route('supply_processes.store')}}" btnBack="{{route('supply_processes.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Processos de Fornecimento"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')
        <x-form.input col="12" label="Título" id="title" required="required" />
        <x-form.textarea col="12" label="Objeto" id="description" required="required" />
    @endslot
    
</x-pages.create>
