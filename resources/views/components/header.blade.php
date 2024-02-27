<!-- Componente Header -->
<div class="flex flex-col items-center justify-between gap-4 lg:flex-row">
    @isset($title)
        <div class="flex items-center gap-4">
            <div class="flex-1">
                <h1 class="font-semibold">{{$title}}</h1>
            </div>
            @isset($route)                
                <div>
                    <a href="{{$route}}">
                        @if (isset($btnRoute))
                            <span class="px-3 py-2 text-sm text-white bg-green-700 rounded-lg shadow-md hover:bg-green-600">{{$btnRoute}}</span>
                        @else
                            <span class="px-2 py-1 text-lg text-white bg-green-700 rounded-lg shadow-md hover:bg-green-600"><i class="fas fa-plus"></i></span>
                        @endif
                    </a>
                </div>
            @endisset
        </div>
    @endisset
</div>