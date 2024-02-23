<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('organizational.update',['organizational'=>$db->id])}}" btnBack="{{route('organizational.index')}}">
    
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Organograma" />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('admin.company.organizational.partials.organizational_form')
    @endslot
    
</x-pages.forms>
