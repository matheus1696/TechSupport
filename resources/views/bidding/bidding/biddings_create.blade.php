<!-- Inicio de Componentização Page Create -->
<x-pages.forms method="create" route="{{route('biddings.store')}}" btnBack="{{route('biddings.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Processos Licitatórios"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('bidding.bidding.partials.bidding_form_create') 
    @endslot
    
</x-pages.create>
