<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Processos de Fornecimento" route="{{ route('supply_processes.create') }}"/>
    @endslot
    
    @slot('body')
        @include('supply_process.supply_process.partials.supply_process_search')
        @include('supply_process.supply_process.partials.supply_process_table')
    @endslot
</x-pages.index>


