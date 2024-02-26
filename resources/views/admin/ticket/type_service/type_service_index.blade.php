<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Tipo de Serviços para os tickets" route="{{ route('ticket_type_services.create') }}"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
            @include('admin.ticket.type_service.partials.type_service_table')
    @endslot

</x-pages.index>