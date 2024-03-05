<div class="my-3">
    <x-table.table :db="$db">
        @slot('thead')
            <x-table.th>Titulo</x-table.th>
            <x-table.th>Status</x-table.th>
            <x-table.th></x-table.th>
        @endslot
    
        @slot('tbody')
            @foreach ($db as $item)
                <x-table.tr>
                    <x-table.td class="text-center">{{$item->title}}</x-table.td>
                    <x-table.td class="text-center">
                        <x-button.buttonStatus condition="{{$item->status}}" route="{{route('ticket_type_services.status',['ticket_type_service'=>$item->id])}}" name="status"/>
                    </x-table.td>
                    <x-table.td class="text-center">                    
                        <x-button.minButtonShow route="{{route('ticket_type_services.show',['ticket_type_service'=>$item->id])}}" />
                        <x-button.minButtonEdit route="{{route('ticket_type_services.edit',['ticket_type_service'=>$item->id])}}" />
                    </x-table.td>
                </x-table.tr>
            @endforeach
        @endslot
    </x-table.table>
</div>