<x-pages.index>
    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Permissão {{$title}}"
        />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('inventory.inventory_permission.partials.index.inventory_permission_index_table')
    @endslot
</x-pages.index>
