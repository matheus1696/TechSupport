<div class="inline-block">
    <!-- Modal toggle -->
    <button 
        data-toggle="modal"
        data-target="#modalEdit{{$id}}"
        class="px-2 py-1 m-1 text-xs text-white bg-yellow-400 rounded-lg shadow-md hover:bg-yellow-500" 
        type="button"
    >
        <i class="text-black fas fa-pen"></i>
    </button>

    <div class="modal fade" id="modalEdit{{$id}}" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
        <div class="text-left modal-dialog modal-lg" role="document">
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
</div>
