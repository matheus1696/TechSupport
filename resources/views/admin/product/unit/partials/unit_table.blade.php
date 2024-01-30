<x-table.table :db="$db">
    @slot('thead')
        <tr>
            <th>Unidade de Medida</th>
            <th class="text-center col-1">Status</th>
            <th class="text-center col-1"></th>
        </tr>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <tr>
                <td>{{$item->unit}}</td>
                <td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}" name="status"
                        route="{{route('units.status',['unit'=>$item->id])}}" />
                </td>
                <td>
                    <x-button.minButtonEdit route="{{route('units.edit',['unit'=>$item->id])}}" />
                </td>
            </tr>
        @endforeach
    @endslot
</x-table.table>