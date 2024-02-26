<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Lista de Dashboards" route="{{ route('dashboards.create') }}"/>
    @endslot
    
    @slot('body')           
        @include('admin.dashboard.partials.dashboard_table')
    @endslot

</x-pages.index>
