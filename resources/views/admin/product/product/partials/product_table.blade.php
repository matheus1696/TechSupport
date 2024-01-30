<x-table.table :db="$db">
    @slot('thead')
        <tr>
            <th class="col-2">Código</th>
            <th>Produto</th>
            <th class="col-1">Tipo</th>
            <th class="col-1">Status</th>
            <th class="col-1"></th>
        </tr>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <tr>
                <td class="text-center">{{$item->code}}</td>
                <td>{{$item->product}}</td>
                <td>{{$item->type}}</td>
                <td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}" name="status" route="{{route('products.status',['product'=>$item->id])}}" />
                </td>
                <td>
                    <x-button.minButtonEdit route="{{route('products.edit',['product'=>$item->id])}}" />
                </td>
            </tr>
        @endforeach
    @endslot
</x-table.table>