<!-- Search -->
<x-search.formSearch>
    <x-search.inputSearch label="Data" type="date" id="searchDate" value="{{ $search['searchDate'] ?? '' }}"/>
    <x-search.inputSearch label="Produto" id="searchName" value="{{ $search['searchName'] ?? '' }}" class="flex-1"/>
</x-search.formSearch>