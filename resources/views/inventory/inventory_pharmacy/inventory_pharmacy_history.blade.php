<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
    <x-header
        title="Histório de Estoque de Medicamento"
        routeBack="{{route('inventory_pharmacies.show',['inventory_pharmacy'=>$dbEstablishmentDepartment->establishment_department_id])}}"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('inventory.inventory_pharmacy.partials.history.inventory_pharmacy_history_search')
        @include('inventory.inventory_pharmacy.partials.history.inventory_pharmacy_history_table')
    @endslot
    
</x-pages.index>