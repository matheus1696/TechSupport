<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Processos de Fornecimento" route="{{ route('supply_processes.create') }}"/>
    @endslot
    
    @slot('body')
        <x-conteiner>
            @include('supply_process.supply_process.partials.supply_process_search')
        </x-conteiner>
        @include('supply_process.supply_process.partials.supply_process_table')
    @endslot
</x-pages.index>


