<x-pages.index>
    
    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Estoque Unidade: {{ $db->department }} - {{ $db->CompanyEstablishment->title }}"
            routeBack="{{route('inventory_products.index')}}"
        />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        <x-conteiner>
            <div>
                @include('inventory.inventory_product.partials.show.inventory_product_show_department_form')
            </div>
        </x-conteiner>
        <hr>
        <div>
            @include('inventory.inventory_product.partials.show.inventory_product_show_department_table')
        </div>
        <div>
            <p class="pr-3 text-xs text-end">
                <a href="{{route('inventory_product_histories.show',['inventory_product_history'=>$db->id])}}" class="text-gray-400 hover:text-gray-900">Verificar Histórico de Movimentação</a>
            </p>
        </div>
    @endslot
</x-pages.index>