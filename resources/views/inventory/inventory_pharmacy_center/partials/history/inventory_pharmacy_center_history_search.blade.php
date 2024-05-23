<!-- Search -->
<x-search.formSearch>
    <x-search.inputSearch label="Data" type="date" id="searchDate" value="{{ $search['searchDate'] ?? '' }}"/>

    <x-search.selectSearch label="Suprimentos" id="searchMedication" class="flex-1">
        @foreach ($dbMedications as $dbMedication)
            @foreach ($db as $item)
                @if ($dbMedication->id == $item->medication_id)
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
    
</x-search.formSearch>