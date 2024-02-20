<!-- Inicio de Componentização Page Create -->
<x-pages.forms method="create" route="{{route('ticket_statuses.store')}}" btnBack="{{route('ticket_statuses.index')}}">
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Dashboard" />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('admin.ticket.ticket_status.partials.ticket_status_form')
    @endslot
</x-pages.forms>