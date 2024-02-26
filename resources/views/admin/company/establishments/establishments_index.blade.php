<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Lista de Estabelecimento" route="{{route('establishments.create')}}"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('admin.company.establishments.partials.establishment_search')

        @include('admin.company.establishments.partials.establishment_table')
    @endslot
    
</x-pages.index>