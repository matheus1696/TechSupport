<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Histório de Estoque Medicamentos: {{$dbEstablishmentDepartment->CompanyEstablishment->title ?? ''}}" 
            routeBack="{{route('inventory_medications.show',['inventory_medication'=>$dbEstablishmentDepartment->id])}}"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('inventory.inventory_medication_history.partials.inventory_medication_history_search')
        @include('inventory.inventory_medication_history.partials.inventory_medication_history_table')
    @endslot
    
</x-pages.index>