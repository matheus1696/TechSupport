<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Dashboards"/>
    @endslot

    @slot('body')            
        <div class="grid grid-cols-2 gap-3 px-2 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6">
            @foreach ($db as $item)
                @include('dashboard.partials.dashboard_card')
            @endforeach
        </div>
    @endslot

</x-pages.index>
