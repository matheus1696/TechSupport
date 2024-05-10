<div class="row justify-content-center py-lg-3">
    <a href="{{route('inventory_histories.show',['inventory_history'=>$db->id])}}" class="btn btn-app bg-warning">
        <i class="fas fa-boxes"></i> Histórico
    </a>
    
    <a href="{{route('inventories.index')}}" class="btn btn-app bg-secondary">
        <i class="fas fa-undo"></i> Retornar
    </a>
</div>