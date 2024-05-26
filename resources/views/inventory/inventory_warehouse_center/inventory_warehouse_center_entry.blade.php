<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Entrada de Suprimento" 
            routeBack="{{route('inventory_warehouse_centers.show',['inventory_warehouse_center'=>$db->id])}}"            
        />
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        <x-conteiner>            
            @include('inventory.inventory_warehouse_center.partials.entry.inventory_warehouse_center_entry_form')
        </x-conteiner>

        <hr>

        <div>
            @include('inventory.inventory_warehouse_center.partials.entry.inventory_warehouse_center_entry_table')  
        </div>
    @endslot
    
</x-pages.index>