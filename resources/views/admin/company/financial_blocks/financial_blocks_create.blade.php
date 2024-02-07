<!-- Inicio de Componentização Page Create -->
<x-pages.forms method="create" route="{{route('financial_blocks.store')}}" btnBack="{{route('financial_blocks.index')}}">
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Editar Bloco Financeiro" />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('admin.company.financial_blocks.partials.financial_blocks_form')
    @endslot
</x-pages.forms>
