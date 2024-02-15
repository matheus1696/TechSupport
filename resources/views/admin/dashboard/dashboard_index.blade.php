<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Lista de Dashboards" route="{{ route('dashboards.create') }}"/>
    @endslot
    
    @slot('body')
        <x-conteiner>            
            @include('admin.dashboard.partials.dashboard_table')
        </x-conteiner>
    @endslot

</x-pages.index>
