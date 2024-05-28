    <x-table.table>
        @slot('thead')
                <x-table.th>Departamentos</x-table.th>
                <x-table.th>Unidades</x-table.th>
                <x-table.th class="w-28"></x-table.th>
        @endslot

        @slot('tbody')
            @foreach ($db as $item)
                <x-table.tr>
                    <x-table.td>{{$item->department}}</x-table.td>
                    <x-table.td>{{$item->CompanyEstablishment->title}}</x-table.td>
                    <x-table.td class="text-center">                        
                        <x-button.minButtonShow route="{{route('{!!$route!!}s.show',['{!!$route!!}'=>$item->id])}}"/>
                    </x-table.td>
                </x-table.tr>
            @endforeach
        @endslot
    </x-table.table>