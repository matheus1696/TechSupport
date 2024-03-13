<a href="{{ route('view_dashboards.show',['view_dashboard'=>$item->id])}}" target="_black" class="text-white">  
    <div class="{{$item->FinancialBlock->color}} rounded-xl hover:shadow-lg overflow-hidden border-4 hover:border-gray-400">
        <div class="px-2">
            <div class="flex flex-col items-center justify-center" style="height: 100px">
                <span class="text-center">{{$item->title}}</span>                
                @if ($item->link_desktop == "" )
                    <span class="text-center d-none d-lg-block"><i class="fas fa-exclamation-triangle"></i> Em construção <i class="fas fa-exclamation-triangle"></i></span>
                @endif
                @if ($item->link_mobile == "" )
                    <span class="text-center d-lg-none"><i class="fas fa-exclamation-triangle"></i> Em construção <i class="fas fa-exclamation-triangle"></i></span>
                @endif
            </div>
        </div>
    </div>
</a>