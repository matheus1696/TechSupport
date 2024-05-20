<!-- Search -->
<x-search.formSearch>
    <x-search.inputSearch label="Data" type="date" id="searchDate" value="{{ $search['searchDate'] ?? '' }}"/>
    
    <x-search.selectSearch label="Suprimento" id="searchSuppy" class="flex-1">
        @foreach ($dbSupplies as $dbSupply)
            @foreach ($db as $item)
                @if ($dbSupply->id == $item->suppy_id)
                    <option 
                        value="{{$dbSupply->id}}"
                        @isset($search['searchSuppy'])
                            @if($dbSupply->id == $search['searchSuppy']) selected @endif
                        @endisset
                    >
                        {{$dbSupply->title}}
                    </option>
                    @break
                @endif
            @endforeach
        @endforeach
    </x-search.selectSearch>
</x-search.formSearch>