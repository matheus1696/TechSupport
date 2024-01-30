<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('biddings.update',['bidding'=>$db->id])}}" btnBack="{{route('biddings.show',['bidding'=>$db->id])}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Processos Licitatórios" route="{{ route('biddings.create') }}"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('bidding.bidding.partials.bidding_form_update')
    @endslot
    
</x-pages.edit>
