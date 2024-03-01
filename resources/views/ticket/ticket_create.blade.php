<!-- Inicio de Componentização Page Create -->
<x-pages.forms method="create" route="{{route('tickets.store')}}" btnBack="{{route('tickets.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Abertura de Chamado"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('ticket.partials.ticket_form')
    @endslot

</x-pages.forms>
