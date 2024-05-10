<x-pages.forms method="create" route="{{route('consumable_types.store')}}" btnBack="{{route('consumable_types.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Cadastro de Tipos de Suprimentos"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')        
        @include('admin.consumable.consumable_types.partials.consumable_types_form')
    @endslot
    
</x-pages.forms>
