<!-- Componente Header -->
<div>
    @isset($title)
        <div class="flex flex-col md:flex-row items-center justify-between gap-4 pt-2 px-2">
            <div class="flex-1">
                <p class="font-semibold text-xl">{{$title}}</p>
            </div>

            <div class="flex items-center justify-center gap-4">
                @isset($routeCreate)                
                    <div>
                        <a href="{{$routeCreate}}">
                            <span class="px-3 py-2 text-sm text-white bg-green-700 rounded-full shadow-md hover:bg-green-600">
                                <i class="fas fa-plus pr-1"></i> 
                                {{$btnTitleCreate ?? ""}}
                            </span>
                        </a>
                    </div>
                @endisset
                
                @isset($routeEdit)                
                    <div>
                        <a href="{{$routeEdit}}">
                            <span class="px-3 py-2 text-sm text-white bg-yellow-500 rounded-full shadow-md hover:bg-yellow-600">
                                <i class="fas fa-pen pr-1"></i> 
                                {{$btnTitleEdit ?? "Editar"}}
                            </span>
                        </a>
                    </div>
                @endisset

                @isset($routeBack)                
                    <div>
                        <a href="{{$routeBack}}">
                            <span class="px-3 py-2 text-sm text-white bg-gray-700 rounded-full shadow-md hover:bg-gray-600">
                                <i class="fas fa-undo pr-1"></i> 
                                {{$btnTitleBack ?? "Retornar"}}
                            </span>
                        </a>
                    </div>
                @endisset
            </div>
        </div>
    @endisset
</div>