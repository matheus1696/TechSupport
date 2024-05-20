<x-pages.index>
    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Classificação de Suprimentos" 
            routeCreate="{{ route('supply_classifications.create') }}"  btnTitleCreate="Adicionar"
        />
    @endslot
        
    <!-- Slot Body -->
    @slot('body')
        @include('admin.supply.supply_classification.partials.supply_classification_table')
    @endslot
</x-pages.index>
