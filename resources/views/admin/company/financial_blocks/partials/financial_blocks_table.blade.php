<x-table.table :db="$db">
    @slot('thead')
        <tr>
            <th class="col-1">Sigla</th>
            <th>Blocos Financeiros</th>
            <th class="col-1">Cor</th>
            <th class="col-1">Status</th>
            <th style="width: 50px"></th>
        </tr>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <tr>
                <td class="text-center">{{$item->acronym}}</td>
                <td class="text-center">{{$item->title}}</td>                
                <td><div style="height: 20px;" class="{{$item->color}}"></div></td>
                <td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}" route="{{route('financial_blocks.update',['financial_block'=>$item->id])}}" name="status" />
                </td>
                <td class="text-center">
                    <x-button.minButtonEdit route="{{route('financial_blocks.edit',['financial_block'=>$item->id])}}" />
                </td>
            </tr>
        @endforeach
    @endslot
</x-table.table>