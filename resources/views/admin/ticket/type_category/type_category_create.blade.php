<!-- Inicio de Componentização Page Create -->
<x-pages.forms method="create" route="{{route('ticket_type_categories.store')}}" btnBack="{{route('ticket_type_categories.index')}}">
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Categorias dos Tickets" />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('admin.ticket.type_category.partials.type_category_form')
    @endslot
</x-pages.forms>