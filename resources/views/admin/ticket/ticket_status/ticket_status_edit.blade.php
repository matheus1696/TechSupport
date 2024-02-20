<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('ticket_statuses.update',['ticket_status'=>$db->id])}}" btnBack="{{route('ticket_statuses.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Editar Status" />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('admin.ticket.ticket_status.partials.ticket_status_form')
    @endslot

</x-pages.forms>