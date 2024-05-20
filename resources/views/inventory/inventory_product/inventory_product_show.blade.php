<x-pages.index>
    
    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Estoque Unidade: {{ $db->department }} - {{ $db->CompanyEstablishment->title }}"
            routeCreate="{{route('inventory_products.edit',['inventory_product'=>$db->id])}}" btnTitleCreate="Solicitações"
            routeBack="{{route('inventory_products.index')}}"
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
            @include('inventory.inventory_product.partials.show.inventory_product_show_table')
        </div>
        <div>
            <p class="pr-3 text-xs text-end">
                <a href="{{route('inventory_product_histories.show',['inventory_product_history'=>$db->id])}}" class="text-gray-400 hover:text-gray-900">Verificar Histórico de Movimentação</a>
            </p>
        </div>
    @endslot
</x-pages.index>