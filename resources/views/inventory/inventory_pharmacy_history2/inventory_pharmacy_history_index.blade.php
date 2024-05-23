<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Histório de Estoque Medicamentos: {{$dbEstablishmentDepartment->CompanyEstablishment->title ?? ''}}" 
            routeBack="{{route('inventory_pharmacies.show',['inventory_pharmacy'=>$dbEstablishmentDepartment->id])}}"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('inventory.inventory_pharmacy_history.partials.inventory_pharmacy_history_search')
        @include('inventory.inventory_pharmacy_history.partials.inventory_pharmacy_history_table')
    @endslot
    
</x-pages.index>