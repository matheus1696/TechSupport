    <x-table.table>
        @slot('thead')
                <x-table.th>Organograma</x-table.th>
                <x-table.th>Status</x-table.th>
                <x-table.th></x-table.th>
        @endslot

        @slot('tbody')
            @foreach ($db as $item)
                <x-table.tr>
                    <x-table.td class="text-left">
                        <div style="padding-left:{{ $item->number_hierarchy }}em;">
                            {{$item->acronym}} - {{$item->title}}
                        </div>
                    </x-table.td>
                    <x-table.td class="text-center">
                        <x-button.buttonStatus condition="{{$item->status}}" route="{{route('organizational.status',['organizational'=>$item->id])}}" name="status"/>
                    </x-table.td>
                    <x-table.td class="text-center">
                        <x-button.minButtonEdit route="{{route('organizational.edit',['organizational'=>$item->id])}}"/>
                        <x-button.minButtonDelete route="{{route('organizational.destroy',['organizational'=>$item->id])}}"/>
                    </x-table.td>
                </x-table.tr>
            @endforeach
        @endslot
    </x-table.table>