<x-pages.forms method="create" route="{{route('organizational.store')}}" btnBack="{{route('organizational.index')}}">
    
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Organograma"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('admin.company.organizational.partials.organizational_form')  
    @endslot
        
</x-pages.forms>
