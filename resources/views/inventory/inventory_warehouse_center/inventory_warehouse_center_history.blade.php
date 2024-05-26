<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Histórico de Movimentação"
            routeBack="{{route('inventory_warehouse_centers.show',['inventory_warehouse_center'=>$dbEstablishmentDepartment->id])}}"
        />
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('inventory.inventory_warehouse_center.partials.history.inventory_warehouse_center_history_search')
        @include('inventory.inventory_warehouse_center.partials.history.inventory_warehouse_center_history_table')
    @endslot
    
</x-pages.index>