<x-pages.forms method="create" route="{{route('type_establishments.store')}}" btnBack="{{route('type_establishments.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Cadastro de Tipos de Estabelecimento"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')        
        @include('admin.company.type_establishments.partials.type_establishments_form')
    @endslot
</x-pages.forms>
