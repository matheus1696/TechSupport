<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('supply_process_statuses.update',['supply_process_status'=>$db->id])}}" btnBack="{{route('supply_process_statuses.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Status dos Processo Licitatório: {{ $db->title }}" />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('admin.supply_process.supply_process_status.partials.supply_process_status_form')
    @endslot

</x-pages.forms>