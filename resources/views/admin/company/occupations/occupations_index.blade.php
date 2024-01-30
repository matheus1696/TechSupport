<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Lista de Ocupações"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')
    <x-conteiner>

        @include('admin.company.occupations.partials.occupations_search')

        @include('admin.company.occupations.partials.occupations_table')

    </x-conteiner>
    @endslot
</x-pages.index>