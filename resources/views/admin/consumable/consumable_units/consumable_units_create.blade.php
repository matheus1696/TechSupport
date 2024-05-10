<x-pages.forms method="create" route="{{route('consumable_units.store')}}" btnBack="{{route('consumable_units.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Cadastro de Tipos de Suprimentos"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')        
        @include('admin.consumable.consumable_units.partials.consumable_units_form')
    @endslot
    
</x-pages.forms>
