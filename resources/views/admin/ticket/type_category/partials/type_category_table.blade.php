<div class="my-3">
    <x-table.table :db="$db">
        @slot('thead')
            <x-table.th>Titulo</x-table.th>
            <x-table.th class="w-28">Serviços</x-table.th>
            <x-table.th class="w-28">Status</x-table.th>
            <x-table.th class="w-40"></x-table.th>
        @endslot
    
        @slot('tbody')
            @foreach ($db as $item)
                <x-table.tr>
                    <x-table.td class="text-center">{{$item->title}}</x-table.td>
                    <x-table.td class="text-center">{{$item->amount_services ?? 0}}</x-table.td>
                    <x-table.td class="text-center">
                        <x-button.buttonStatus condition="{{$item->status}}" route="{{route('ticket_type_categories.status',['ticket_type_category'=>$item->id])}}" name="status"/>
                    </x-table.td>
                    <x-table.td class="text-center">
                        <x-button.minButtonShow route="{{route('ticket_type_categories.show',['ticket_type_category'=>$item->id])}}" />
                        <x-button.minButtonEdit route="{{route('ticket_type_categories.edit',['ticket_type_category'=>$item->id])}}" />
                        <x-button.minButtonDelete route="{{route('ticket_type_categories.destroy',['ticket_type_category'=>$item->id])}}" />
                    </x-table.td>
                </x-table.tr>
            @endforeach
        @endslot
    </x-table.table>
</div>