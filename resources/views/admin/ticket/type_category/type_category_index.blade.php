<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Categorias do Ticket" route="{{ route('ticket_type_categories.create') }}"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        <x-conteiner>
            @include('admin.ticket.type_category.partials.type_category_table')
        </x-conteiner>
    @endslot

</x-pages.index>