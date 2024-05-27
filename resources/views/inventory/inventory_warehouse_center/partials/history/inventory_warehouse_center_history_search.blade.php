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

    <x-search.selectSearch label="Suprimentos" id="searchConsumable" class="flex-1">
        @foreach ($dbConsumables as $dbConsumable)
            @foreach ($db as $item)
                @if ($dbConsumable->id == $item->consumable_id)
                    <option 
                        value="{{$dbConsumable->id}}"
                        @isset($search['searchConsumable'])
                            @if($dbConsumable->id == $search['searchConsumable']) selected @endif
                        @endisset
                    >
                        {{$dbConsumable->title}}
                        @break
                    </option>
                @endif
            @endforeach
        @endforeach
    </x-search.selectSearch>
    
</x-search.formSearch>