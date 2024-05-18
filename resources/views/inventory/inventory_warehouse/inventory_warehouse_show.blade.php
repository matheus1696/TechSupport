<x-pages.index>
    
    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Estoque: {{ $db->CompanyEstablishment->title }} - {{ $db->department }}"
            routeCreate="{{route('inventory_warehouses.entryCreate',['inventory_warehouse'=>$db->id])}}" btnTitleCreate="Entrada"
            routeBack="{{route('inventory_warehouses.index')}}"
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

        <div>
            @include('inventory.inventory_warehouse.partials.show.inventory_warehouse_show_search')
        </div>

        <div>
            @include('inventory.inventory_warehouse.partials.show.inventory_warehouse_show_table')
        </div>
        
        <div>
            <p class="pr-3 text-xs text-end">
                <a href="{{route('inventory_warehouses.history',['inventory_warehouse'=>$db->id])}}" class="text-gray-400 hover:text-gray-900">Verificar Histórico de Movimentação</a>
            </p>
        </div>
    @endslot
</x-pages.index>