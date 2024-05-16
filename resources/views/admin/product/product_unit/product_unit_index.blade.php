<x-pages.index>
    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Apresentação dos Produtos" 
            routeCreate="{{ route('product_units.create') }}" btnTitleCreate="Adicionar"
        />
    @endslot
        
    <!-- Slot Body -->
    @slot('body')
        @include('admin.product.product_unit.partials.product_unit_table')
    @endslot
</x-pages.index>
