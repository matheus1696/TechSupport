<x-table.table :db="$db">
    @slot('thead')
        <tr>
            <th>Níveis de Atenção/Blocos</th>
            <th class="text-center col-1">Status</th>
            <th class="col-1"></th>
        </tr>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}" route="{{route('attentions.update',['attention'=>$item->id])}}" name="status" />
                </td>
                <td class="text-center">
                    <x-button.minButtonEdit route="{{route('attentions.edit',['attention'=>$item->id])}}" />
                </td>
            </tr>
        @endforeach
    @endslot
</x-table.table>