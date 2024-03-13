<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('organizations.update',['organization'=>$db->id])}}" btnBack="{{route('organizations.index')}}">
    
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Organograma" />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('admin.company.organizations.partials.organizations_form')
    @endslot
    
</x-pages.forms>
