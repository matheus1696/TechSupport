<!-- Search -->
<x-search.formSearch>
    
    <x-search.selectSearch label="Produtos" id="searchSupply" class="flex-1">
        @foreach ($dbSupplies as $dbSupply)
            @foreach ($dbInventories as $dbInventory)
                @if ($dbSupply->id == $dbInventory->supply_id)
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

    <x-search.selectSearch label="Bloco Financeiro" id="searchFinancialBlock" class="flex-1">
        @foreach ($dbFinancialBlocks as $dbFinancialBlock)
            @foreach ($dbInventories as $dbInventory)
                @if ($dbFinancialBlock->id == $dbInventory->supply_id)
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