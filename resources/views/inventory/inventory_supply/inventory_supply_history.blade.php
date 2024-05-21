<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
    <x-header
        title="Histório de Estoque de Produtos"
        routeBack="{{route('inventory_supplies.show',['inventory_supply'=>$dbEstablishmentDepartment->establishment_department_id])}}"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('inventory.inventory_supply.partials.history.inventory_supply_history_search')
        @include('inventory.inventory_supply.partials.history.inventory_supply_history_table')
    @endslot
    
</x-pages.index>