<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Categorias do Ticket" route="{{ route('ticket_type_categories.create') }}"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('admin.ticket.type_category.partials.type_category_table')
    @endslot

</x-pages.index>