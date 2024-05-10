<!-- Components Table -->
<x-table.table :db="$db">
    <!-- Components THead -->
    @slot('thead')
        <x-table.th>Código</x-table.th>
        <x-table.th>Estabelecimento</x-table.th>
        <x-table.th>Bairro</x-table.th>
        <x-table.th class="w-40"></x-table.th>
    @endslot

    <!-- Components TBody -->
    @slot('tbody')
        @foreach ($db as $item)
            <x-table.tr>
                <x-table.td>{{$item->code}}</x-table.td>
                <x-table.td>{{$item->title}}</x-table.td>
                <x-table.td>{{$item->district}}</x-table.td>
                <x-table.td>
                    <x-button.minButtonShow route="{{route('inventories.show',['inventory'=>$item->id])}}" />
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>