<!-- Search -->
<x-search.formSearch>
    <x-search.inputSearch label="Setor" id="searchSector" value="{{ $search['searchSector'] ?? '' }}" class="flex-1"/>
    <x-search.selectSearch label="Unidade" id="searchEstablishment" class="flex-1">
        @foreach ($dbSearchs as $dbSearch)
            <option 
                value="{{$dbSearch->establishment_id}}"
                @isset($search['searchEstablishment'])
                    @if($dbSearch->establishment_id == $search['searchEstablishment']) selected @endif
                @endisset
            >
                {{$dbSearch->CompanyEstablishment->title}}
            </option>
        @endforeach
    </x-search.selectSearch>
</x-search.formSearch>