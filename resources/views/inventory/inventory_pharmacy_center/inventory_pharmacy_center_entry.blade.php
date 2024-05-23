<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Central de Abastecimento Farmacêutico"
            routeBack="{{route('inventory_pharmacy_centers.show',['inventory_pharmacy_center'=>$db->id])}}"            
        />
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        <x-conteiner>            
            @include('inventory.inventory_pharmacy_center.partials.entry.inventory_pharmacy_center_entry_form')
        </x-conteiner>

        <hr>

        <div>
            @include('inventory.inventory_pharmacy_center.partials.entry.inventory_pharmacy_center_entry_table')  
        </div>      
        
        <div class="pt-2">
            <p class="pr-3 text-xs text-end">
                <a href="{{route('inventory_pharmacy_centers.history',['inventory_pharmacy_center'=>$db->id])}}" class="text-gray-400 hover:text-gray-900">Verificar Histórico de Movimentação</a>
            </p>
        </div>
    @endslot
    
</x-pages.index>