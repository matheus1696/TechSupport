<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Entrada de Produto: {{$db->department}} - {{$db->CompanyEstablishment->title}}" 
            routeBack="{{route('inventory_warehouses.show',['inventory_warehouse'=>$db->id])}}"            
        />
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        <x-conteiner>            
            @include('inventory.inventory_warehouse.partials.entry.inventory_warehouse_entry_form')
        </x-conteiner>

        @include('inventory.inventory_warehouse.partials.entry.inventory_warehouse_entry_table')
    @endslot
    
</x-pages.index>