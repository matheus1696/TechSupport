<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Meus Chamados" route="{{ route('tickets.create') }}" btnRoute="Abrir Chamado"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')
        <livewire:ticket.ticket-table>
    @endslot

</x-pages.index>