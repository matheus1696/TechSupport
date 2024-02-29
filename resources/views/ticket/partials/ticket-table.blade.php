<div>
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
            @error('record')  @enderror
                <x-table.tr class="">
                    <x-table.td>{{$item->ticket_number}}</x-table.td>
                    <x-table.td>{{$item->title}}</x-table.td>
                    <x-table.td>{{$item->Establishment->title}}</x-table.td>
                    <x-table.td class="hidden lg:table-cell">{{$item->TicketTypeSubService->title ?? ''}}</x-table.td>
                    <x-table.td class="hidden lg:table-cell">@if ($item->data_last_interaction) ({{$item->amount_interaction}}) {{$item->data_last_interaction}} @endif</x-table.td>
                    <x-table.td>{{$item->TicketStatus->title}}</x-table.td>
                    <x-table.td class="hidden lg:table-cell"> @if ($item->reopened) Sim @else Não @endif </x-table.td>
                    <x-table.td>
                        <x-button.minButtonModalInfo :id="$item->id" title="{{$item->ticket_number}} - {{$item->title}}">
                            <div class="flex flex-col justify-start gap-2 mb-3">
                                <p><strong>Número do Chamado:</strong> {{$item->ticket_number}}</p>
                                <p><strong>Título:</strong> {{$item->title}}</p>
                                <p><strong>Estabelecimento:</strong> {{$item->Establishment->title}}</p>
                                <p><strong>Tipos de Serviço:</strong> {{$item->TicketTypeSubService->title ?? ''}}</p>
                                <p><strong>Status:</strong> {{$item->TicketStatus->title}}</p>                               
                            </div>
                            <hr>
                        </x-button.minButtonModalInfo>
                    </x-table.td>
                </x-table.tr>
            @endforeach
        @endslot
    </x-table.table>

    
</div>


