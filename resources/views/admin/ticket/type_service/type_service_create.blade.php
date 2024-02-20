<!-- Inicio de Componentização Page Create -->
<x-pages.forms method="create" route="{{route('ticket_type_services.store')}}" btnBack="{{route('ticket_type_services.index')}}">
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Dashboard" />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('admin.ticket.type_service.partials.type_service_form')
    @endslot
</x-pages.forms>