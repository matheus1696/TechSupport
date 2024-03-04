<x-pages.index paginate="{{$db->links()}}">

    <!-- Slot Header -->
    @slot('header')
    <x-header title="Lista de Estados" />
    @endslot

    @slot('body')
        <x-conteiner>
            @include('admin.region.states.partials.states_search')
        </x-conteiner>
        
        @include('admin.region.states.partials.states_table')
    @endslot
</x-pages.index>