<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Processos Licitatórios" route="{{ route('biddings.create') }}"/>
    @endslot
    
    @slot('body')
        <x-conteiner>

            @include('bidding.bidding.partials.bidding_search')        

            @include('bidding.bidding.partials.bidding_table')

        </x-conteiner>
    @endslot
</x-pages.index>


