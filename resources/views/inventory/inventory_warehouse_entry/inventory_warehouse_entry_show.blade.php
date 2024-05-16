<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Entrada de Produto: {{$db->department}} - {{$db->CompanyEstablishment->title}}" 
            routeJoker="{{route('inventory_products.index')}}" btnTitleJoker="Saídas" iconJoker="fas fa-minus"
            routeBack="{{route('inventory_warehouses.show',['inventory_warehouse'=>$db->id])}}"            
        />
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        <x-conteiner>            
            @include('inventory.inventory_warehouse_entry.partials.show.inventory_warehouse_entry_show_form')
        </x-conteiner>
        @include('inventory.inventory_warehouse_entry.partials.show.inventory_warehouse_entry_show_table')
    @endslot
    
</x-pages.index>