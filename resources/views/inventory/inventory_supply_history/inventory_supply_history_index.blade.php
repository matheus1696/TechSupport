<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
    <x-header title="Histório de Estoque de Produtos: {{$dbEstablishmentDepartment->CompanyEstablishment->title ?? ''}}" route="{{route('inventory_products.show',['inventory_product'=>$dbEstablishmentDepartment->id])}}" btnTitle="Retornar"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('inventory.inventory_product_history.partials.inventory_product_history_search')
        @include('inventory.inventory_product_history.partials.inventory_product_history_table')
    @endslot
    
</x-pages.index>