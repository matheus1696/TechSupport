<x-pages.index>
    
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Centro de Distribuição:  {{ $db->department }} - {{ $db->CompanyEstablishment->title }}" route="{{route('inventory_warehouses.index')}}" btnTitle="Retornar"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')
       <x-conteiner>
            <div>
                @include('inventory.inventory_warehouse.partials.show.inventory_warehouse_show_department_form')
            </div>
        </x-conteiner>
        <hr>
        <div>
            @include('inventory.inventory_warehouse.partials.show.inventory_warehouse_show_department_table')
        </div>
        <div>
            <p class="pr-3 text-xs text-end">
                <a href="{{route('inventory_warehouse_histories.show',['inventory_warehouse_history'=>$db->id])}}" class="text-gray-400 hover:text-gray-900">Verificar Histórico de Movimentação</a>
            </p>
        </div>
    @endslot
</x-pages.index>