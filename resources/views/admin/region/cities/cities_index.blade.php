<x-pages.index paginate="{{$db->links()}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Lista de Cidades"/>
    @endslot
    
    @slot('body')
    <x-conteiner>
        @include('admin.region.cities.partials.cities_search')
    </x-conteiner>

        @include('admin.region.cities.partials.cities_table')
    @endslot
</x-pages.index>