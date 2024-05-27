<!-- Search -->
<x-search.formSearch>
    
    <x-search.selectSearch label="Suprimentos" id="searchConsumable" class="flex-1">
        @foreach ($dbConsumables as $dbConsumable)
            <option 
                value="{{$dbConsumable->id}}"
                @isset($search['searchConsumable'])
                    @if($dbConsumable->id == $search['searchConsumable']) selected @endif
                @endisset
            >
                {{$dbConsumable->title}}
            </option>
        @endforeach
    </x-search.selectSearch>

    <x-search.selectSearch label="Bloco Financeiro" id="searchFinancialBlock" class="flex-1">
        @foreach ($dbFinancialBlocks as $dbFinancialBlock)
            @foreach ($dbInventories as $dbInventory)
                @if ($dbFinancialBlock->id == $dbInventory->financial_block_id)
                    <option 
                        value="{{$dbFinancialBlock->id}}"
                        @isset($search['searchFinancialBlock'])
                            @if($dbFinancialBlock->id == $search['searchFinancialBlock']) selected @endif
                        @endisset
                    >
                        {{$dbFinancialBlock->acronym}}
                        @break
                    </option>
                @endif
            @endforeach
        @endforeach
    </x-search.selectSearch>
    
</x-search.formSearch>