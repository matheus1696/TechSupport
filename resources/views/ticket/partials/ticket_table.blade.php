<!-- Components Table -->
<x-table.table :db="$db">
    <!-- Components THead -->
    @slot('thead')
        <x-table.th>#</x-table.th>
        <x-table.th>Título</x-table.th>
        <x-table.th>Estabelecimento</x-table.th>
        <x-table.th class="hidden lg:table-cell">Tipo de Serviços</x-table.th>
        <x-table.th class="hidden lg:table-cell">Interações</x-table.th>
        <x-table.th>Status</x-table.th>
        <x-table.th class="hidden lg:table-cell">Reaberto</x-table.th>
        <x-table.th></x-table.th>
    @endslot

    <!-- Components TBody -->
    @slot('tbody')
        @foreach ($db as $item)
            <x-table.tr>
                <x-table.td>Number</x-table.td>
                <x-table.td>{{$item->title}}</x-table.td>
                <x-table.td>{{$item->Establishment->title}}</x-table.td>
                <x-table.td class="hidden lg:table-cell">{{$item->TicketTypeSubService->title}}</x-table.td>
                <x-table.td class="hidden lg:table-cell">@if ($item->data_last_interaction) ({{$item->amount_interaction}}) {{$item->data_last_interaction}} @endif</x-table.td>
                <x-table.td>{{$item->TicketStatus->title}}</x-table.td>
                <x-table.td class="hidden lg:table-cell"> @if ($item->reopened) Sim @else Não @endif </x-table.td>
                <x-table.td></x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>