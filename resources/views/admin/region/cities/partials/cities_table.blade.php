<x-table.table :db="$db">
    @slot('thead')
        <tr>
            <th class="text-center col-1">IBGE</th>
            <th>Municipios</th>
            <th class="col-2">Estados</th>
            <th class="text-center col-1">Status</th>
        </tr>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <tr>
                <td class="text-center">{{$item->code_ibge}}</td>
                <td>{{$item->city}}</td>
                <td>{{$item->RegionStates->state}}</td>
                <td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}"
                        route="{{route('cities.status',['city'=>$item->id])}}" />
                </td>
            </tr>
        @endforeach
    @endslot
</x-table.table>