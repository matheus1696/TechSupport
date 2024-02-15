<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('dashboards.update',['dashboard'=>$db->id])}}" btnBack="{{route('dashboards.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Dashboard" />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('admin.dashboard.partials.dashboard_form')
    @endslot
    </x-pages.forms>
