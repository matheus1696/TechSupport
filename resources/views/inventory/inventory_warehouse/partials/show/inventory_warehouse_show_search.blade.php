<!-- Search -->
<x-search.formSearch>
    <x-search.inputSearch label="Produtos" id="searchName" value="{{ $search['searchName'] ?? '' }}" class="flex-1"/>
    <x-search.inputSearch label="Bloco Financeiro" id="searchFinancialBlock" value="{{ $search['searchFinancialBlock'] ?? '' }}" class="w-32"/>
</x-search.formSearch>