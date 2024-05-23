<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Histórico de Movimentação"
            routeBack="{{route('inventory_pharmacy_centers.show',['inventory_pharmacy_center'=>$dbEstablishmentDepartment->establishment_department_entry_id])}}"
        />
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('inventory.inventory_pharmacy_center.partials.history.inventory_pharmacy_center_history_search')
        @include('inventory.inventory_pharmacy_center.partials.history.inventory_pharmacy_center_history_table')
    @endslot
    
</x-pages.index>