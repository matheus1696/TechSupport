<!-- Search -->
<x-search.formSearch>
    <x-search.inputSearch label="Setor" id="searchSector" value="{{ $search['searchSector'] ?? '' }}" class="flex-1"/>
    <x-search.selectSearch label="Unidade" id="searchEstablishment" class="flex-1">
        @foreach ($dbEstablishments as $dbEstablishment)
            @foreach ($db as $item)
                @if ($dbEstablishment->id == $item->establishment_id)
                    <option 
                        value="{{$dbEstablishment->id}}"
                        @isset($search['searchEstablishment'])
                            @if($dbEstablishment->id == $search['searchEstablishment']) selected @endif
                        @endisset
                    >
                        {{$dbEstablishment->title}}
                    </option>
                    @break
                @endif
            @endforeach
        @endforeach
    </x-search.selectSearch>
</x-search.formSearch>