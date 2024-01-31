<div class="row justify-content-center py-lg-3">
    <a href="{{route('biddingItens.create',['bidding'=>$db->id])}}" class="btn btn-app bg-success">
        <i class="mb-1 text-sm fas fa-plus"></i> Cad. Item
    </a>
    <a href="{{route('biddings.edit',['bidding'=>$db->id])}}" class="btn btn-app bg-warning">
        <i class="mb-1 text-sm fas fa-pen"></i> Editar
    </a>
    <a href="{{route('biddings.index')}}" class="btn btn-app bg-secondary">
        <i class="mb-1 text-sm fas fa-reply"></i> Voltar
    </a>
</div>