<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Lista de Blocos Financeiros" route="{{ route('financial_blocks.create') }}"/>
    @endslot
    
    @slot('body')        
        @include('admin.company.financial_blocks.partials.financial_blocks_table')
    @endslot
</x-pages.index>
