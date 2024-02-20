<x-table.table :db="$db">
    @slot('thead')
        <tr>
            <th>Titulo</th>
            <th class="col-1">Status</th>
            <th class="col-1"></th>
        </tr>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <tr>
                <td class="text-center">{{$item->title}}</td>
                <td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}" route="{{route('ticket_type_services.status',['ticket_type_service'=>$item->id])}}" name="status"/>
                </td>
                <td class="text-center">                    
                    <x-button.minButtonShow route="{{route('ticket_type_services.show',['ticket_type_service'=>$item->id])}}" />
                    <x-button.minButtonEdit route="{{route('ticket_type_services.edit',['ticket_type_service'=>$item->id])}}" />
                </td>
            </tr>
        @endforeach
    @endslot
</x-table.table>