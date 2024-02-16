    <div class="small-box {{$item->FinancialBlocks->color}}">
        <div class="px-2 inner">
            <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100px">
                <span class="text-center">{{$item->title}}</span>                
                @if ($item->link_desktop == "" )
                    <span class="text-center d-none d-lg-block"><i class="fas fa-exclamation-triangle"></i> Construção <i class="fas fa-exclamation-triangle"></i></span>
                @endif
                @if ($item->link_mobile == "" )
                    <span class="text-center d-lg-none"><i class="fas fa-exclamation-triangle"></i> Construção <i class="fas fa-exclamation-triangle"></i></span>
                @endif
            </div>
        </div>
        <div class="icon">
            <i class="fas fa-chart-pie"></i>
        </div>
    </div>