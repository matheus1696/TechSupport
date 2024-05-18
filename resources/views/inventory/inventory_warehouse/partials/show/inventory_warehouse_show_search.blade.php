<!-- Search -->
<x-search.formSearch>
    
    <x-search.selectSearch label="Produtos" id="searchProduct" class="flex-1">
        @foreach ($dbProducts as $dbProduct)
            @foreach ($dbInventories as $dbInventory)
                @if ($dbProduct->id == $dbInventory->product_id)
                    <option 
                        value="{{$dbProduct->id}}"
                        @isset($search['searchProduct'])
                            @if($dbProduct->id == $search['searchProduct']) selected @endif
                        @endisset
                    >
                        {{$dbProduct->title}}
                        @break
                    </option>
                @endif
            @endforeach
        @endforeach
    </x-search.selectSearch>

    <x-search.selectSearch label="Bloco Financeiro" id="searchFinancialBlock" class="flex-1">
        @foreach ($dbFinancialBlocks as $dbFinancialBlock)
            @foreach ($dbInventories as $dbInventory)
                @if ($dbFinancialBlock->id == $dbInventory->product_id)
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