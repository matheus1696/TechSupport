<!-- Search -->
<x-search.formSearch>
    <x-search.inputSearch label="Data" type="date" id="searchDate" value="{{ $search['searchDate'] ?? '' }}"/>    

    <x-search.selectSearch label="Movimentação" id="searchMovement">
        <option 
            value="Entrada" 
            @isset($search['searchMovement']) 
                @if("Entrada" == $search['searchMovement']) selected @endif 
            @endisset
        >Entrada</option>

        <option 
            value="Saída" 
            @isset($search['searchMovement']) 
                @if("Saída" == $search['searchMovement']) selected @endif 
            @endisset
        >Saída</option>

    </x-search.selectSearch>

    <x-search.selectSearch label="Suprimentos" id="searchSupply" class="flex-1">
        @foreach ($dbSupplies as $dbSupply)
            @foreach ($db as $item)
                @if ($dbSupply->id == $item->supply_id)
                    <option 
                        value="{{$dbSupply->id}}"
                        @isset($search['searchSupply'])
                            @if($dbSupply->id == $search['searchSupply']) selected @endif
                        @endisset
                    >
                        {{$dbSupply->title}}
                        @break
                    </option>
                @endif
            @endforeach
        @endforeach
    </x-search.selectSearch>
    
</x-search.formSearch>