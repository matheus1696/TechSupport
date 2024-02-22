<x-table.table :db="$db">
    @slot('thead')
        <tr>
            <th class="col-1">UF</th>
            <th class="col-1">Sigla</th>
            <th>Estados</th>
            <th class="col-2">Paises</th>
            <th class="col-1">Status</th>
        </tr>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <tr>
                <td class="text-center">{{$item->code_uf}}</td>
                <td class="text-center">{{$item->acronym}}</td>
                <td class="text-center">{{$item->state}}</td>
                <td class="text-center">{{$item->RegionCountries->country}}</td>
                <td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}"
                        route="{{route('states.status',['state'=>$item->id])}}" name="status" />
                </td>
            </tr>
        @endforeach
    @endslot
</x-table.table>