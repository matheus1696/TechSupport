<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Status dos Tickets" route="{{ route('ticket_statuses.create') }}"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')  
        @include('admin.ticket.ticket_status.partials.ticket_status_table')
    @endslot

</x-pages.index>