<div class="w-100 my-3">
    <h1 class="text-center">
        {{$title ?? "Title"}}
        @if (isset($route))
            <span style="position:absolute; right:70px;">
                <a href="{{$route}}">
                    <i class="fas fa-plus-circle text-primary"></i>
                </a>
            </span>
        @endif
    </h1>
</div>
