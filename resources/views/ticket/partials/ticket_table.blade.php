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
                <x-table.tr>
                    <x-table.td> <a href="{{ route('tickets.show',['ticket'=>$item->id]) }}">{{$item->ticket_number}}</a> </x-table.td>
                    <x-table.td>{{$item->title}}</x-table.td>
                    <x-table.td>{{$item->Establishment->title}}</x-table.td>
                    <x-table.td class="hidden lg:table-cell">{{$item->TicketTypeService->title ?? ''}}</x-table.td>
                    <x-table.td class="hidden lg:table-cell">
                        @if ($item->data_last_interaction)
                        
                            <span class="bg-blue-200 text-xs font-medium text-blue-800 text-center p-0.5 leading-none rounded-full px-2 -translate-y-1/2 translate-x-1/2 left-auto top-0 right-0">top-right</span>
                            {{$item->amount_interaction}}
                            {{ date('d/m/Y',strtotime($item->data_last_interaction))$item->data_last_interaction}}
                        @endif
                    </x-table.td>
                    <x-table.td>{{$item->TicketStatus->title}}</x-table.td>
                    <x-table.td class="hidden lg:table-cell"> @if ($item->reopened) Sim @else Não @endif </x-table.td>
                    <x-table.td>                        
                        <x-button.minButtonShow route="{{ route('tickets.show',['ticket'=>$item->id]) }}" />
                        <x-button.minButtonModalInfo :id="$item->id" title="{{$item->ticket_number}} - {{$item->title}}">
                            <div class="flex flex-col justify-start gap-2 mb-3">
                                <p><strong>Número do Chamado:</strong> {{$item->ticket_number}}</p>
                                <p><strong>Título:</strong> {{$item->title}}</p>
                                <p><strong>Estabelecimento:</strong> {{$item->Establishment->title}}</p>
                                <p><strong>Tipos de Serviço:</strong> {{$item->TicketTypeSubService->title ?? ''}}</p>
                                <p><strong>Status:</strong> {{$item->TicketStatus->title}}</p>                               
                            </div>
                            <hr>
                            <div>
                                <h4 class="py-2 text-center">Histórico</h4>
                                <div class="max-h-40">
                                    @foreach ($dbInteractions as $dbInteraction)
                                        @if ($dbInteraction->ticket_id == $item->id)
                                            <div>
                                                <div class="w-1/2 px-3 py-2 bg-green-300 shadow-md rounded-xl">
                                                    <div>
                                                        <p class="py-2">{!! $dbInteraction->description !!}</p>
                                                    </div>
                                                    <div class="py-1 text-xs text-end"> {{ date('d/m/Y H:i',strtotime($dbInteraction->created_at)) }} | {{$dbInteraction->User->name}}</div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </x-button.minButtonModalInfo>
                    </x-table.td>
                </x-table.tr>
            @endforeach
        @endslot
    </x-table.table>
</div>


