<button
    type="button"
    class="m-1 btn btn-sm btn-warning elevation-2"
    data-toggle="modal"
    data-target="#{{$id}}"
    style="font-size: 0.8em"
>
  <i class="{{$icon ?? "fas fa-pen"}}"></i>
</button>

<div class="modal fade" id="{{$id}}" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
    <div class="text-left modal-dialog modal-xl" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="Modal">{{$title}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="m-4 modal-body">
                {{$slot}}
            </div>
        </div>
    </div>
</div>