<!-- Inicio de Componentização Page Create -->
<x-pages.forms method="create" route="{{route('supply_process_statuses.store')}}" btnBack="{{route('supply_process_statuses.index')}}">
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Status dos Processo Licitatório"  />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('admin.supply_process.supply_process_status.partials.supply_process_status_form')
    @endslot
</x-pages.forms>