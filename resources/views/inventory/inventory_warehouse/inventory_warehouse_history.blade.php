<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
    <x-header
        title="Histório de Estoque de Produtos"
        routeBack="{{route('inventory_warehouses.show',['inventory_warehouse'=>$dbEstablishmentDepartment->id])}}"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('inventory.inventory_warehouse.partials.history.inventory_warehouse_history_search')
        @include('inventory.inventory_warehouse.partials.history.inventory_warehouse_history_table')
    @endslot
    
</x-pages.index>