
<h5 class="mt-4 mb-4 text-center">Chamados Abertos</h5>

<!-- Components Table -->
<x-table.table :db="$db">
    <!-- Components THead -->
    @slot('thead')
        <tr>
            <th class="col-1">#</th>
            <th>Title</th>
            <th class="col-2">Interações</th>
            <th class="col-2">Tipo de Serviços</th>
            <th class="col-2">Status</th>
            <th class="col-1">Reaberto</th>
        </tr>
    @endslot

    <!-- Components TBody -->
    @slot('tbody')
        @foreach ($db as $item)
            <tr @if ($item->reopened) class="bg-danger" @endif>
                <td>Number</td>
                <td>{{$item->title}}</td>
                <td>@if ($item->data_last_interaction) ({{$item->amount_interaction}}) {{$item->data_last_interaction}} @endif</td>
                <td>{{$item->TicketTypeSubService->title}}</td>
                <td>{{$item->TicketStatus->title}}</td>
                <td>@if ($item->reopened) Sim @else Não @endif</td>
            </tr>
        @endforeach
    @endslot
</x-table.table>