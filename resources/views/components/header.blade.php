<!-- Componente Header -->
<div>
    @isset($title)
        <div class="pl-3 pr-5 mt-3 row justify-content-between align-items-center">
            <div>
                <h1 class="text-center">{{$title}}</h1>
            </div>
            @isset($route)                
                <div>
                    <a href="{{$route}}">
                        @if (isset($btnRoute))
                            <span class="btn btn-success ">{{$btnRoute}}</span>
                        @else
                            <span><i class="text-xl text-success fas fa-plus-square"></i></span>
                        @endif
                    </a>
                </div>
            @endisset
        </div>
    @endisset
</div>