<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Lista de Usuários"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        <x-conteiner>

            @include('admin.users.partials.users_search')

            @include('admin.users.partials.users_table')

        </x-conteiner>
    @endslot
</x-pages.index>
