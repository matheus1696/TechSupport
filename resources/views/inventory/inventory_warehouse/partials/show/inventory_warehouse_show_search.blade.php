<!-- Search -->
<x-search.formSearch>
    
    <x-search.selectSearch label="Produtos" id="searchProduct" class="flex-1">
        @foreach ($dbInventories as $dbInventory)
            <option 
                value="{{$dbInventory->product_id}}"
                @isset($search['searchProduct'])
                    @if($dbInventory->product_id == $search['searchProduct']) selected @endif
                @endisset
            >
                {{$dbInventory->CompanyFinancialBlock->acronym}} - {{$dbInventory->Product->title}}
            </option>
        @endforeach
    </x-search.selectSearch>
    
</x-search.formSearch>