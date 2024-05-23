<x-pages.index>
    
    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Estoque de Medicamentos: {{ $db->department }} - {{ $db->CompanyEstablishment->title }}" 
            routeCreate="{{route('inventory_pharmacies.entryCreate',['inventory_pharmacy'=>$db->id])}}" btnTitleCreate="Entrada"
            routeBack="{{route('inventory_pharmacies.index')}}"
        />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        <div>
            @include('inventory.inventory_pharmacy.partials.show.inventory_pharmacy_show_table')
        </div>
        <div>
            <p class="pr-3 text-xs text-end">
                <a href="{{route('inventory_pharmacy_histories.show',['inventory_pharmacy_history'=>$db->id])}}" class="text-gray-400 hover:text-gray-900">Verificar Histórico de Movimentação</a>
            </p>
        </div>
    @endslot
</x-pages.index>