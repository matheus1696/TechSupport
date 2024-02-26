<x-table.table :db="$db">
    @slot('thead')
        <x-table.th class="col-1">IBGE</x-table.th>
        <x-table.th>Municipios</x-table.th>
        <x-table.th class="col-2">Estados</x-table.th>
        <x-table.th class="col-1">Status</x-table.th>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <x-table.tr>
                <x-table.td class="text-center">{{$item->code_ibge}}</x-table.td>
                <x-table.td class="text-center">{{$item->city}}</x-table.td>
                <x-table.td class="text-center">{{$item->RegionStates->state}}</x-table.td>
                <x-table.td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}"
                        route="{{route('cities.status',['city'=>$item->id])}}" />
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>