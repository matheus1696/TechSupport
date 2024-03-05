<x-table.table :db="$db">
    @slot('thead')
        <x-table.th>Titulo</x-table.th>
        <x-table.th>Bloco Financeiro</x-table.th>
        <x-table.th class="w-28">Status</x-table.th>
        <x-table.th class="w-40"></x-table.th>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <x-table.tr>
                <x-table.td class="text-center">{{$item->title}}</x-table.td>
                <x-table.td class="text-center">{{$item->FinancialBlocks->title}}</x-table.td>
                <x-table.td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}" name="status" route="{{route('dashboards.status',['dashboard'=>$item->id])}}" />
                </x-table.td>
                <x-table.td class="text-center">
                    <x-button.minButtonEdit route="{{route('dashboards.edit',['dashboard'=>$item->id])}}" />
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>