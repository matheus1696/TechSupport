<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Dashboards"/>
    @endslot
    
    @slot('body')
        <x-conteiner> 
            <div class="row">
                @foreach ($db as $item)
                    @if ($item->link_desktop)                    
                        <div class="d-none d-lg-block col-xl-2 col-md-4 col-6">
                            <a href="{{$item->link_desktop}}" target="_black">                               
                                @include('dashboard.partials.dashboard_card')
                            </a>
                        </div>
                    @else
                        <div class="d-none d-lg-block col-xl-2 col-md-4 col-6">                    
                            @include('dashboard.partials.dashboard_card')
                        </div>
                    @endif

                    @if ($item->link_mobile)
                        <div class="d-lg-none col-xl-2 col-md-4 col-6">                    
                            <a href="{{$item->link_mobile}}" target="_black">                               
                                @include('dashboard.partials.dashboard_card')
                            </a>
                        </div>
                    @else  
                        <div class="d-lg-none col-xl-2 col-md-4 col-6">                    
                            @include('dashboard.partials.dashboard_card')
                        </div>
                    @endif                                        
                @endforeach  
            </div>       
        </x-conteiner>
    @endslot

</x-pages.index>
