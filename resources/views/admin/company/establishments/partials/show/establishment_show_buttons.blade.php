<div class="row justify-content-center py-lg-3">
    <a href="{{route('establishments.edit',['establishment'=>$db->id])}}" class="btn btn-app bg-warning">
        <i class="mb-1 text-sm fas fa-pen"></i> Editar
    </a>
    <a href="{{route('establishments.index')}}" class="btn btn-app bg-secondary">
        <i class="mb-1 text-sm fas fa-reply"></i> Voltar
    </a>
</div>