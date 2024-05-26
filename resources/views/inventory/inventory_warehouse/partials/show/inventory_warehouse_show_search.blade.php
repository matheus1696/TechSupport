<!-- Search -->
<x-search.formSearch>
    
    <x-search.selectSearch label="Suprimentos" id="searchSupply" class="flex-1">
        @foreach ($dbSupplies as $dbSupply)
            <option 
                value="{{$dbSupply->id}}"
                @isset($search['searchSupply'])
                    @if($dbSupply->id == $search['searchSupply']) selected @endif
                @endisset
            >
                {{$dbSupply->title}}
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