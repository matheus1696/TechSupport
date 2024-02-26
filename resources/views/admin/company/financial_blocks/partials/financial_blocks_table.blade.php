<x-table.table :db="$db">
    @slot('thead')
        <x-table.th>Sigla</x-table.th>
        <x-table.th>Blocos Financeiros</x-table.th>
        <x-table.th>Cor</x-table.th>
        <x-table.th>Status</x-table.th>
        <x-table.th></x-table.th>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <x-table.tr>
                <x-table.td>{{$item->acronym}}</x-table.td>
                <x-table.td>{{$item->title}}</x-table.td>                
                <x-table.td><div class="h-8 w-8 m-auto {{$item->color}}"></div></x-table.td>
                <x-table.td>
                    <x-button.buttonStatus condition="{{$item->status}}" route="{{route('financial_blocks.update',['financial_block'=>$item->id])}}" name="status" />
                </x-table.td>
                <x-table.td>
                    <x-button.minButtonEdit route="{{route('financial_blocks.edit',['financial_block'=>$item->id])}}" />
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>