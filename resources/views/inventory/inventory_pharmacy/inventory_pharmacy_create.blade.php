<x-pages.index>
    
    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Entrada de Medicamento Avulsa"
            routeBack="{{route('inventory_pharmacies.show', ['inventory_pharmacy'=>$db->id])}}"
        />
    @endslot
    
    <!-- Slot Body -->
    @slot('body')        
        @include('inventory.inventory_pharmacy.partials.create.inventory_pharmacy_create_form')
        @include('inventory.inventory_pharmacy.partials.create.inventory_pharmacy_create_table')
    @endslot
    
</x-pages.index>