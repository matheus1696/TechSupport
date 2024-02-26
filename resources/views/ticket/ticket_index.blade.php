<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Meus Chamados" route="{{ route('tickets.create') }}" btnRoute="Abrir Chamado"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')
        <x-conteiner>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <form method="get" action="{{ route('tickets.index') }}">
                        <input type="text" name="ticket" value="open" hidden>
                        <button type="submit" class="mx-1 nav-link">Chamados Abertos</button>
                    </form>
                </li>
                <li class="nav-item">
                    <form method="get" action="{{ route('tickets.index') }}">
                        <input type="text" name="ticket" value="close" hidden>
                        <button type="submit" class="mx-1 nav-link">Chamados Finalizados</button>
                    </form>
                </li>
            </ul>
            
            @include('ticket.partials.ticket_table')
        </x-conteiner>

        
    @endslot

    

</x-pages.index>