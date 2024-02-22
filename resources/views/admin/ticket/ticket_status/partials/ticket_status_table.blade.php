<x-table.table :db="$db">
    @slot('thead')
        <tr>
            <th>Titulo</th>
            <th class="col-1">Padrão</th>
            <th class="col-1">Status</th>
            <th style="width: 50px"></th>
        </tr>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <tr>
                <td class="text-center">{{$item->title}}</td>
                <td class="text-center">                    
                    @include('admin.ticket.ticket_status.partials.ticket_status_buttonDefault')
                </td>
                <td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}" route="{{route('ticket_statuses.status',['ticket_status'=>$item->id])}}" name="status"/>
                </td>
                <td class="text-center">
                    <x-button.minButtonEdit route="{{route('ticket_statuses.edit',['ticket_status'=>$item->id])}}" />
                </td>
            </tr>
        @endforeach
    @endslot
</x-table.table>