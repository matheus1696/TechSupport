<x-table.table :db="$db">
    @slot('thead')
        <x-table.th>Código</x-table.th>
        <x-table.th>Produto</x-table.th>
        <x-table.th>Tipo</x-table.th>
        <x-table.th>Status</x-table.th>
        <x-table.th></x-table.th>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <x-table.tr>
                <x-table.td class="text-center">{{$item->code}}</x-table.td>
                <x-table.td class="text-center">{{$item->title}}</x-table.td>
                <x-table.td class="text-center">
                    @if ($item->type === "Consumption") Consumo @endif
                    @if ($item->type === "Permanent") Permanente @endif
                </x-table.td>
                <x-table.td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}" name="status" route="{{route('products.status',['product'=>$item->id])}}" />
                </x-table.td>
                <x-table.td class="text-center">
                    <x-button.minButtonEdit route="{{route('products.edit',['product'=>$item->id])}}" />
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>