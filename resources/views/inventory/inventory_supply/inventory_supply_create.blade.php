<x-pages.index>
    
    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Entrada de Suprimentos Avulsa"
            routeBack="{{route('inventory_supplies.show', ['inventory_supply'=>$db->id])}}"
        />
    @endslot
    
    <!-- Slot Body -->
    @slot('body')        
        @include('inventory.inventory_supply.partials.create.inventory_supply_create_form')
        @include('inventory.inventory_supply.partials.create.inventory_supply_create_table')
    @endslot
    
</x-pages.index>