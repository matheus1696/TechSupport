<x-pages.index>
    
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Estoque: {{ $db->department }} - {{ $db->CompanyEstablishment->title }}" route="{{route('inventory_products.index')}}" btnTitle="Retornar"/>
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

    @endslot
</x-pages.index>