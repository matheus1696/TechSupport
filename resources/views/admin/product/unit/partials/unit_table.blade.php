<x-table.table :db="$db">
    @slot('thead')
        <x-table.th>Sigla</x-table.th>
        <x-table.th>Unidade de Medida</x-table.th>
        <x-table.th>Status</x-table.th>
        <x-table.th></x-table.th>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <x-table.tr>
                <x-table.td class="text-center">{{$item->acronym}}</x-table.td>
                <x-table.td class="text-center">{{$item->title}}</x-table.td>
                <x-table.td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}" name="status" route="{{route('units.status',['unit'=>$item->id])}}" />
                </x-table.td>
                <x-table.td class="text-center">
                    <x-button.minButtonEdit route="{{route('units.edit',['unit'=>$item->id])}}" />
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>