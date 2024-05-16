<x-pages.index>
    
    <!-- Slot Header -->
    @slot('header')
        <x-header 
            routeCreate="" btnTitleCreate="Entrada Avulsa"
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
        
        <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
            <div>
                <h3 class="mb-3 text-xl text-center">Preparado para Entrega</h3>
                @include('inventory.inventory_product.partials.edit.inventory_product_edit_table')
            </div>
            <div>      
                <h3 class="mb-3 text-xl text-center">Solicitações em análise</h3>          
                @include('inventory.inventory_product.partials.edit.inventory_product_edit_table')
            </div>
        </div>
        
    @endslot
    
</x-pages.index>