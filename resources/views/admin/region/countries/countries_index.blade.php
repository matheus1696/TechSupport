<!-- Inicio de Componentização da Página Index -->
<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Lista de Paises"/>
    @endslot
    
    @slot('body')
        <x-conteiner>

            @include('admin.region.countries.partials.countries_search')

            @include('admin.region.countries.partials.countries_table')

        </x-conteiner>
    @endslot
</x-pages.index>