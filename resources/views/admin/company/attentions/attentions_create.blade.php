<!-- Inicio de Componentização Page Create -->
<x-pages.forms method="create" route="{{route('attentions.store')}}" btnBack="{{route('attentions.index')}}">
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Editar Nível de Atenção" />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('admin.company.attentions.partials.attentions_form')
    @endslot
</x-pages.forms>
