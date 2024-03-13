<x-pages.forms method="create" route="{{route('organizations.store')}}" btnBack="{{route('organizations.index')}}">
    
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Organograma"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('admin.company.organizations.partials.organizations_form')  
    @endslot
        
</x-pages.forms>
