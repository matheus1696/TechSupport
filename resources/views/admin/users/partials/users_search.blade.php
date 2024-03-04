<!-- Search -->
<x-search.formSearch>
    <x-search.inputSearch label="Nome do Usuário" id="searchName" value="{{ $search['searchName'] ?? '' }}" class="flex-1"/>
    <x-search.inputSearch label="Email do Usuário" id="searchEmail" value="{{ $search['searchEmail'] ?? '' }}" class="flex-1"/>
</x-search.formSearch>