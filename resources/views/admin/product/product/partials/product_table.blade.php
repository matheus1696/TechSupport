<x-table.table :db="$db">
    @slot('thead')
        <x-table.th>Suprimento</x-table.th>
        <x-table.th class="w-40">Tipo</x-table.th>
        <x-table.th class="w-40">Apresentação</x-table.th>
        <x-table.th class="w-28">Status</x-table.th>
        <x-table.th class="w-40"></x-table.th>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <x-table.tr>
                <x-table.td>{{$item->title}}</x-table.td>
                <x-table.td>{{$item->ProductType->title}}</x-table.td>
                <x-table.td>{{$item->ProductUnit->title}}</x-table.td>
                <x-table.td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}" route="{{route('products.update',['product'=>$item->id])}}" name="status" />
                </x-table.td>
                <x-table.td>
                    <x-button.minButtonEdit route="{{route('products.edit',['product'=>$item->id])}}" />
                    <x-button.minButtonDelete route="{{route('products.destroy',['product'=>$item->id])}}" />
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>