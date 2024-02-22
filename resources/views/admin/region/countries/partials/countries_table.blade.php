<x-table.table :db="$db">
    @slot('thead')
        <tr>
            <th class="col-1">Código</th>
            <th class="col-1">Siglas</th>
            <th>Pais</th>
            <th>Pais em Inglês</th>
            <th>DDI</th>
            <th class="col-1">Status</th>
        </tr>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <tr>
                <td class="text-center">{{$item->code_iso}}</td>
                <td class="text-center">{{$item->acronym_3}}</td>
                <td>{{$item->country}}</td>
                <td>{{$item->country_ing}}</td>
                <td class="text-center">{{$item->code_ddi}}</td>
                <td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}" route="{{route('countries.status',['country'=>$item->id])}}" name="status" />
                </td>
            </tr>
        @endforeach
    @endslot
</x-table.table>