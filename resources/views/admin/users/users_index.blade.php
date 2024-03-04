<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Lista de Usuários"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        <x-conteiner>
            @include('admin.users.partials.users_search')
        </x-conteiner>
        @include('admin.users.partials.users_table')
    @endslot
</x-pages.index>
