<div class="row justify-content-center py-lg-3">
    <a href="{{route('establishments.edit',['establishment'=>$db->id])}}" class="btn btn-app bg-warning">
        <i class="mb-1 text-sm fas fa-pen"></i> Editar
    </a>
    
    <form action="{{route('establishments.hasInventory',['establishment'=>$db->id])}}" method="POST" class="btn btn-app bg-secondary">
        @method('PUT')
        @csrf

        <i class="mb-1 text-sm fas fa-reply"></i>
        
        @if ($db->has_inventory)
        <input type="text" name="has_inventory" value="0" hidden>
            <button type="submit">Desativar Estoque</button>       
        @else        
        <input type="text" name="has_inventory" value="1" hidden>
            <button type="submit">Ativar Estoque</button>
        @endif
    </form>

    <a href="{{route('establishments.index')}}" class="btn btn-app bg-secondary">
        <i class="mb-1 text-sm fas fa-reply"></i> Voltar
    </a>
</div>

<form action="" method="post"></form>