<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Central de Abastecimento Farmacêutico"
            routeBack="{{route('inventory_pharmacy_centers.show',['inventory_pharmacy_center'=>$dbEstablishmentDepartment->department_entry_id])}}"
        />
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('inventory.inventory_pharmacy_center.partials.history.inventory_pharmacy_center_history_search')
        @include('inventory.inventory_pharmacy_center.partials.history.inventory_pharmacy_center_history_table')
    @endslot
    
</x-pages.index>