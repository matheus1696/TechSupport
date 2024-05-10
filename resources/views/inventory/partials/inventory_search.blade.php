<!-- Search -->
<x-search.formSearch>
    <x-search.inputSearch label="CNES" id="searchCod" value="{{ $search['searchCod'] ?? '' }}"/>
    <x-search.inputSearch label="Unidade" id="searchName" value="{{ $search['searchName'] ?? '' }}" class="flex-1"/>
</x-search.formSearch>