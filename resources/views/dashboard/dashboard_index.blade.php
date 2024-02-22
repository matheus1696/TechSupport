<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Dashboards"/>
    @endslot
    
    @slot('body')
        <x-conteiner> 
            <div class="row">
                @foreach ($db as $item)
                    <div class="col-xl-2 col-md-4 col-6">                             
                        @include('dashboard.partials.dashboard_card')
                    </div>                                    
                @endforeach  
            </div>       
        </x-conteiner>
    @endslot

</x-pages.index>
