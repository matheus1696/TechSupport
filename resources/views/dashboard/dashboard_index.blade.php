<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Dashboards"/>
    @endslot
    
    @slot('body')
        <x-conteiner> 
            <div class="row">
                @foreach ($db as $item)
                    <div class="d-none d-lg-block col-xl-2 col-md-4 col-6">
                        <a href="{{ route('dashboards.show',['dashboard'=>$item->id])}}" target="_black">                               
                            @include('dashboard.partials.dashboard_card')
                        </a>
                    </div>                                    
                @endforeach  
            </div>       
        </x-conteiner>
    @endslot

</x-pages.index>
