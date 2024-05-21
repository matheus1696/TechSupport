<x-pages.index>
    
    <!-- Slot Header -->
    @slot('header')
        <x-header 
            routeJoker="" btnTitleJoker="Entrada Avulsa" iconJoker="fas fa-clipboard-list"
            routeBack="{{route('inventory_supplies.show', ['inventory_supply'=>$db->id])}}"
        />
    @endslot
    
    <!-- Slot Body -->
    @slot('body')

        @if ($errors->any())
            <div class="relative px-4 py-3 mb-3 text-red-700 bg-red-100 border border-red-400 rounded" role="alert">
                <span class="block sm:inline">Houve alguns problema ao realizar a movimentação.</span>
                <ul class="mt-3 text-sm text-red-600 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
            <div>      
                <h3 class="mb-3 text-lg font-semibold text-center">Pedidos de Realizados</h3>
                <h3 class="text-center">Em construção</h3>
            </div>
            <div>
                <h3 class="mb-3 text-lg font-semibold text-center">Enviado para entrega</h3>
                @include('inventory.inventory_supply.partials.request.inventory_supply_request_table')
            </div>
        </div>
        
    @endslot
    
</x-pages.index>