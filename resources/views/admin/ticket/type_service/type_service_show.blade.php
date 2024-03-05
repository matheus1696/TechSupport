<x-pages.index>
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Classificação de Serviço: {{ $db->title }} ({{ $db->amount_sub_services }})"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')

        <x-conteiner>
            <x-form.form method="create" route="{{route('ticket_type_sub_services.store')}}">
                <input type="hidden" name="ticket_type_service_id" value="{{$db->id}}">
                <x-form.input col="9" label="Classificação de Serviço" id="title" required="required" />
                <x-form.input type="number" col="3" label="Tempo de Resposta (Horas)" id="response_time" value="72" />
            </x-form.form>
        </x-conteiner>

        <hr>

        <div class="my-3">
            <x-table.table>
                @slot('thead')
                        <x-table.th>Classificação de Serviço</x-table.th>
                        <x-table.th class="w-28">T. de Resposta</x-table.th>
                        <x-table.th class="w-28">Status</x-table.th>
                        <x-table.th class="w-40"></x-table.th>
                @endslot
            
                @slot('tbody')
                    @foreach ($dbSubServices as $dbSubService)
                        <x-table.tr>
                            <x-table.td>{{$dbSubService->title}}</x-table.td>
                            <x-table.td>{{$dbSubService->response_time}} Horas</x-table.td>
                            <x-table.td>
                                <x-button.buttonStatus condition="{{$dbSubService->status}}" route="{{route('ticket_type_sub_services.status',['ticket_type_sub_service'=>$dbSubService->id])}}" name="status"/>
                            </x-table.td>
                            <x-table.td>
                                
                                <x-button.minButtonModalEdit id="Subtipos{{$dbSubService->id}}" title="{{$dbSubService->title}}">
        
                                    <x-form.form route="{{route('ticket_type_sub_services.update',['ticket_type_sub_service'=>$dbSubService->id])}}" method="edit">
                                        
                                        <x-form.input col="9" label="Classificação de Serviço" id="title" required="required" value="{{$dbSubService->title}}" />
                                        <x-form.input type="number" col="3" label="Tempo de Resposta (Horas)" id="response_time" value="{{$dbSubService->response_time}}" />
                                        
                                    </x-form.form>
                                    
                                </x-button.minButtonModalEdit>
                            </x-table.td>
                        </x-table.tr>
                    @endforeach
                @endslot
            </x-table.table>
        </div>
    @endslot
</x-pages.index>