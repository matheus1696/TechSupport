<!-- Inicio de Componentização Page Index -->
<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Unidade de Medida" :route="route('units.create')" />
    @endslot

    <!-- Slot Body -->
    @slot('body')
    <x-conteiner>

        @include('admin.product.unit.partials.unit_search')     

    </x-conteiner>

        @include('admin.product.unit.partials.unit_table')   
    @endslot
</x-pages.index>