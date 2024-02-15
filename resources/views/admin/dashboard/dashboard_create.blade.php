<!-- Inicio de Componentização Page Create -->
<x-pages.forms method="create" route="{{route('dashboards.store')}}" btnBack="{{route('dashboards.index')}}">
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Dashboard" />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('admin.dashboard.partials.dashboard_form')
    @endslot
</x-pages.forms>