<!-- Search -->
<x-search.formSearch>
    <x-search.inputSearch label="Produto" id="searchName" value="{{ $search['searchName'] ?? '' }}" class="flex-1"/>
    <x-search.inputSearch label="Últimos Dias" id="searchTime" value="{{ $search['searchTime'] ?? '' }}"/>
</x-search.formSearch>