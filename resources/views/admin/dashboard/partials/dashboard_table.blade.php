<x-table.table :db="$db">
    @slot('thead')
        <tr>
            <th>Titulo</th>
            <th class="col-2">Bloco Financeiro</th>
            <th class="col-1"></th>
        </tr>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <tr>
                <td class="text-center">{{$item->title}}</td>
                <td class="text-center">{{$item->FinancialBlocks->title}}</td>
                <td class="text-center">
                    <x-button.minButtonEdit route="{{route('dashboards.edit',['dashboard'=>$item->id])}}" />
                </td>
            </tr>
        @endforeach
    @endslot
</x-table.table>