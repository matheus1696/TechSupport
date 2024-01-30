<!-- Inicio de Componentização Page Index -->
<x-pages.index paginate="{{$db->links()}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Unidade de Medida" :route="route('units.create')" />
    @endslot

    <!-- Slot Body -->
    @slot('body')
    <x-conteiner>

        @include('admin.product.unit.partials.unit_search')

        @include('admin.product.unit.partials.unit_table')        

    </x-conteiner>
    @endslot
</x-pages.index>