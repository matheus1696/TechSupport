<x-pages.index>
    
    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Estoque: {{ $db->CompanyEstablishment->title }} - {{ $db->department }}"
            routeCreate="{{route('inventory_warehouse_entries.show',['inventory_warehouse_entry'=>$db->id])}}" btnTitleCreate="Entrada"
            routeJoker="{{route('inventory_products.index')}}" btnTitleJoker="Saídas" iconJoker="fas fa-minus"
            routeBack="{{route('inventory_warehouses.index')}}"
        />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        <div>
            @include('inventory.inventory_warehouse.partials.show.inventory_warehouse_show_search')
        </div>

        <div>
            @include('inventory.inventory_warehouse.partials.show.inventory_warehouse_show_table')
        </div>
        
        <div>
            <p class="pr-3 text-xs text-end">
                <a href="{{route('inventory_warehouse_histories.show',['inventory_warehouse_history'=>$db->id])}}" class="text-gray-400 hover:text-gray-900">Verificar Histórico de Movimentação</a>
            </p>
        </div>
    @endslot
</x-pages.index>