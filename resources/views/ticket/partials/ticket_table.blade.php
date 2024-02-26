<!-- Components Table -->
<x-table.table :db="$db">
    <!-- Components THead -->
    @slot('thead')
        <x-table.th>#</x-table.th>
        <x-table.th>Title</x-table.th>
        <x-table.th>Tipo de Serviços</x-table.th>
        <x-table.th>Interações</x-table.th>
        <x-table.th>Status</x-table.th>
        <x-table.th>Reaberto</x-table.th>
    @endslot

    <!-- Components TBody -->
    @slot('tbody')
        @foreach ($db as $item)
            <x-table.tr>
                <x-table.td>Number</x-table.td>
                <x-table.td>{{$item->title}}</x-table.td>
                <x-table.td>{{$item->TicketTypeSubService->title}}</x-table.td>
                <x-table.td>@if ($item->data_last_interaction) ({{$item->amount_interaction}}) {{$item->data_last_interaction}} @endif</x-table.td>
                <x-table.td>{{$item->TicketStatus->title}}</x-table.td>
                <x-table.td> @if ($item->reopened) Sim @else Não @endif </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>