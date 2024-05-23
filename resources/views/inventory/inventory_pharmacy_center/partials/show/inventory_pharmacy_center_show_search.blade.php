<!-- Search -->
<x-search.formSearch>
    
    <x-search.selectSearch label="Suprimentos" id="searchMedication" class="flex-1">
        @foreach ($dbMedications as $dbMedication)
            @foreach ($dbInventories as $dbInventory)
                @if ($dbMedication->id == $dbInventory->medication_id)
                    <option 
                        value="{{$dbMedication->id}}"
                        @isset($search['searchMedication'])
                            @if($dbMedication->id == $search['searchMedication']) selected @endif
                        @endisset
                    >
                        {{$dbMedication->title}}
                        @break
                    </option>
                @endif
            @endforeach
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