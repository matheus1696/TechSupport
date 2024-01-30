<!-- Inicio de Componentização Page Create -->
<x-pages.forms method="create" route="{{route('establishments.store')}}" btnBack="{{route('establishments.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Cadastrar Estabelecimento"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')      
    
        @include('admin.company.establishments.partials.establishment_form')
        
    @endslot

</x-pages.forms>
