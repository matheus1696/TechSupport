<x-pages.forms method="create" route="{{route('consumables.store')}}" btnBack="{{route('consumables.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Cadastro de Tipos de Suprimentos"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')        
        @include('admin.consumable.consumables.partials.consumables_form')
    @endslot
    
</x-pages.forms>
