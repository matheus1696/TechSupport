<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Status dos Tickets" route="{{ route('ticket_statuses.create') }}"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        <x-conteiner>            
            @include('admin.ticket.ticket_status.partials.ticket_status_table')
        </x-conteiner>
    @endslot

</x-pages.index>