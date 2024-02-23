<x-table.table :db="$db">
    @slot('thead')
        <tr>
            <th>Titulo</th>
            <th class="col-2">Bloco Financeiro</th>
            <th class="col-1">Status</th>
            <th style="width: 50px"></th>
        </tr>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <tr>
                <td class="text-center">{{$item->title}}</td>
                <td class="text-center">{{$item->FinancialBlocks->title}}</td>
                <td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}" name="status" route="{{route('dashboards.status',['dashboard'=>$item->id])}}" />
                </td>
                <td class="text-center">
                    <x-button.minButtonEdit route="{{route('dashboards.edit',['dashboard'=>$item->id])}}" />
                </td>
            </tr>
        @endforeach
    @endslot
</x-table.table>