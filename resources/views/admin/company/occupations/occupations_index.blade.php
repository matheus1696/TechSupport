<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Lista de Ocupações (CBO)"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')
    <x-conteiner>
        @include('admin.company.occupations.partials.occupations_search')
    </x-conteiner>

        @include('admin.company.occupations.partials.occupations_table')
    @endslot
</x-pages.index>