<x-conteiner>
    <h5 class="text-center">Chamados Finalizados</h5>
    <hr>
        <!-- Components Table -->
        <x-table.table :db="$db">
            <!-- Components THead -->
            @slot('thead')
                <tr>
                    <th>Title</th>
                    <th class="col-2">Interações</th>
                    <th class="col-2">Tipo de Serviços</th>
                    <th class="col-1">Reaberto</th>
                </tr>
            @endslot

            <!-- Components TBody -->
            @slot('tbody')
                @foreach ($db as $item)
                        <tr>
                            <td class="text-center">{{$item->title}}</td>
                            <td class="text-center">@if ($item->data_last_interaction) ({{$item->amount_interaction}}) {{$item->data_last_interaction}} @endif</td>
                            <td class="text-center">{{$item->TicketTypeSubService->title}}</td>
                            <td class="text-center">@if ($item->reopened) Sim @else Não @endif</td>
                        </tr>
                @endforeach
            @endslot
        </x-table.table>                
</x-conteiner>