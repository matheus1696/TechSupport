    <x-table.table>
        @slot('thead')
                <x-table.th>Organograma</x-table.th>
                <x-table.th class="w-28">Status</x-table.th>
                <x-table.th class="w-40"></x-table.th>
        @endslot

        @slot('tbody')
            @foreach ($db as $item)
                <x-table.tr>
                    <x-table.td class="text-left">
                        <div style="padding-left:{{ $item->number_hierarchy }}em;">
                            {{$item->acronym}} - {{$item->title}}
                            @if ($item->linked_users > 0)
                                <span class="px-2 py-1 mx-3 text-xs font-semibold text-white rounded-lg shadow-md bg-gray-700/50">
                                    <i class="mx-1 fas fa-user"></i>
                                    <span>{{$item->linked_users}}</span>
                                    <span>Usuários </span>
                                </span>
                            @endif
                        </div>
                    </x-table.td>
                    <x-table.td class="text-center">
                        <x-button.buttonStatus condition="{{$item->status}}" route="{{route('organizational.status',['organizational'=>$item->id])}}" name="status"/>
                    </x-table.td>
                    <x-table.td class="text-center">                        
                        <x-button.minButtonShow route="{{route('organizational.show',['organizational'=>$item->id])}}"/>
                        <x-button.minButtonEdit route="{{route('organizational.edit',['organizational'=>$item->id])}}"/>
                        <x-button.minButtonDelete route="{{route('organizational.destroy',['organizational'=>$item->id])}}"/>
                    </x-table.td>
                </x-table.tr>
            @endforeach
        @endslot
    </x-table.table>