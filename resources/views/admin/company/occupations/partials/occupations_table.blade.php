<x-table.table :db="$db">
    @slot('thead')
        <tr>
            <th>Código</th>
            <th>Ocupação (CBO)</th>
            <th class="text-center col-2">Status</th>
        </tr>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <tr>
                <td class="text-center">{{$item->code}}</td>
                <td>{{$item->title}}</td>
                <td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}"
                        route="{{route('occupations.update',['occupation'=>$item->id])}}" name="status" />
                </td>
            </tr>
        @endforeach
    @endslot
</x-table.table>