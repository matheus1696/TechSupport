<x-table.table :db="$db">
    @slot('thead')
        <x-table.th>Titulo</x-table.th>
        <x-table.th class="w-28">Cor</x-table.th>
        <x-table.th class="w-28">Padrão</x-table.th>
        <x-table.th class="w-28">Status</x-table.th>
        <x-table.th class="w-40"></x-table.th>
    @endslot

    @slot('tbody')
        @foreach ($db as $item)
            <x-table.tr>
                <x-table.td class="text-center">{{$item->title}}</x-table.td>
                <x-table.td><div class="m-auto h-4 w-4 rounded-full {{$item->color}}"></div></x-table.td>
                <x-table.td class="text-center">
                    @include('admin.supply_process.supply_process_status.partials.supply_process_status_buttonDefault')
                </x-table.td>
                <x-table.td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}" route="{{route('supply_process_statuses.status',['supply_process_status'=>$item->id])}}" name="status"/>
                </x-table.td>
                <x-table.td class="text-center">
                    <x-button.minButtonEdit route="{{route('supply_process_statuses.edit',['supply_process_status'=>$item->id])}}" />
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>