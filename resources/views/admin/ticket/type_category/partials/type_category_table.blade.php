<x-table.table :db="$db">
    @slot('thead')
        <tr>
            <th>Titulo</th>
            <th class="col-1">Serviços</th>
            <th class="col-1">Status</th>
            <th style="width: 150px"></th>
        </tr>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <tr>
                <td class="text-center">{{$item->title}}</td>
                <td class="text-center">{{$item->amount_services ?? 0}}</td>
                <td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}" route="{{route('ticket_type_categories.status',['ticket_type_category'=>$item->id])}}" name="status"/>
                </td>
                <td class="text-center">
                    <x-button.minButtonShow route="{{route('ticket_type_categories.show',['ticket_type_category'=>$item->id])}}" />
                    <x-button.minButtonEdit route="{{route('ticket_type_categories.edit',['ticket_type_category'=>$item->id])}}" />
                    <x-button.minButtonDelete route="{{route('ticket_type_categories.destroy',['ticket_type_category'=>$item->id])}}" />
                </td>
            </tr>
        @endforeach
    @endslot
</x-table.table>