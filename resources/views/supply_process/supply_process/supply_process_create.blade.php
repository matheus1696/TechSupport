<!-- Inicio de Componentização Page Create -->
<x-pages.forms method="create" route="{{route('supply_processes.store')}}" btnBack="{{route('supply_processes.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Processos de Fornecimento"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('supply_process.supply_process.partials.supply_process_form')
    @endslot
    
</x-pages.create>
