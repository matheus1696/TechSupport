<button
    type="button"
    class="btn btn-sm btn-warning elevation-2 mx-1"
    data-toggle="modal"
    data-target="#{{$id}}"
    style="font-size: 0.8em"
>
    <i class="fas fa-lock"></i>
</button>

<div class="modal fade" id="{{$id}}" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
    <div class="modal-dialog modal-lg text-left" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal">{{$title}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body m-4">
                {{$slot}}
            </div>
        </div>
    </div>
</div>
