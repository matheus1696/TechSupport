<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Status dos Processo Licitatório" route="{{ route('supply_process_statuses.create') }}"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')  
        @include('admin.supply_process.supply_process_status.partials.supply_process_status_table')
    @endslot

</x-pages.index>