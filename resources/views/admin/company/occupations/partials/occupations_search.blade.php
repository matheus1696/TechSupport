<!-- Search -->
<x-search.formSearch>
    <x-search.inputSearch label="Código CBO" id="searchCod" value="{{ $search['searchCod'] ?? '' }}"/>
    <x-search.inputSearch label="Ocupação" id="searchName" value="{{ $search['searchName'] ?? '' }}" class="flex-1"/>
</x-search.formSearch>