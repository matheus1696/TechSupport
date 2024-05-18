<!-- Search -->
<x-search.formSearch>
    <x-search.inputSearch label="Data" type="date" id="searchDate" value="{{ $search['searchDate'] ?? '' }}"/>
    
    <x-search.selectSearch label="Produto" id="searchProduct" class="flex-1">
        @foreach ($dbProducts as $dbProduct)
            @foreach ($db as $item)
                @if ($dbProduct->id == $item->product_id)
                    <option 
                        value="{{$dbProduct->id}}"
                        @isset($search['searchProduct'])
                            @if($dbProduct->id == $search['searchProduct']) selected @endif
                        @endisset
                    >
                        {{$dbProduct->title}}
                    </option>
                    @break
                @endif
            @endforeach
        @endforeach
    </x-search.selectSearch>
</x-search.formSearch>