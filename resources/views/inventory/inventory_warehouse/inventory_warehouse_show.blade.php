<x-pages.index>
    
    <!-- Slot Header -->
    @slot('header')
        <x-header title="{{ $db->CompanyEstablishment->title }} - {{ $db->department }}" route="{{route('inventory_warehouses.index')}}" btnTitle="Retornar"/>
        <a href="">
            <span class="px-3 py-2 text-sm text-white bg-green-700 rounded-full shadow-md hover:bg-green-600">{{$btnTitle}}</span>
        </a>
    @endslot

    <!-- Slot Body -->
    @slot('body')
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