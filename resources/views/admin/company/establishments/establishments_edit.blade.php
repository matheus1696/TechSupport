<x-pages.forms method="edit" route="{{route('establishments.update',['establishment'=>$db->id])}}" btnBack="{{route('establishments.index')}}"> 

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Lista de Estabelecimento: {{ $db->title }}"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')

        @include('admin.company.establishments.partials.establishment_form')

    @endslot
</x-pages.forms>