<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('ticket_type_categories.update',['ticket_type_category'=>$db->id])}}" btnBack="{{route('ticket_type_categories.index')}}">
    <!-- Slot Header -->
    @slot('header')
    <x-header title="Categorias do Ticket" />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('admin.ticket.type_category.partials.type_category_form')
    @endslot

</x-pages.forms>