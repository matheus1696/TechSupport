<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('ticket_type_services.update',['ticket_type_service'=>$db->id])}}" btnBack="{{route('ticket_type_services.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Editar Status" />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('admin.ticket.type_service.partials.type_service_form')
    @endslot

</x-pages.forms>