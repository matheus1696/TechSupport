<!-- Search -->
<x-search.formSearch>
    <x-search.inputSearch label="Código" id="searchCod" value="{{ $search['searchCod'] ?? '' }}"/>
    <x-search.inputSearch label="Produto" id="searchName" value="{{ $search['searchName'] ?? '' }}" class="flex-1"/>
</x-search.formSearch>