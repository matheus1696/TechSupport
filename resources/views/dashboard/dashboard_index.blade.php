<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Dashboards"/>
    @endslot
    
    @slot('body')
        <x-conteiner>  
            <div class="row">
                @foreach ($db as $item)
                    <div class="px-2 col-xl-2 col-md-4 col-6">
                        <a href="{{ route('view_dashboards.show',['view_dashboard'=>$item->id]) }}">
                            <div class="small-box {{$item->FinancialBlocks->color}}">
                                <div class="px-2 inner">
                                    <div class="row justify-content-center" style="height: 100px">
                                        <h6 class="text-center align-self-center">{{$item->title}}</h6>
                                    </div>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-chart-pie"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach  
            </div>       
        </x-conteiner>
    @endslot

</x-pages.index>
