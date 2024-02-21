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
                <x-form.input col="12" label="Classificação de Serviço" id="title" required="required" />
            </x-form.form>

            <hr>

            <div class="col-12">
                <x-table.table>
                    @slot('thead')
                        <tr>
                            <th>Classificação de Serviço</th>
                            <th class="col-1">Status</th>
                            <th class="col-1"></th>
                        </tr>
                    @endslot
                
                    @slot('tbody')
                        @foreach ($dbSubServices as $dbSubService)
                            <tr>
                                <td>{{$dbSubService->title}}</td>                                
                                <td class="text-center">
                                    <x-button.buttonStatus condition="{{$dbSubService->status}}" route="{{route('ticket_type_sub_services.status',['ticket_type_sub_service'=>$dbSubService->id])}}" name="status"/>
                                </td>
                                <td class="text-center">
                                    
                                    <x-button.minButtonModalEdit id="Subtipos{{$dbSubService->id}}" title="{{$dbSubService->title}}">
            
                                        <x-form.form route="{{route('ticket_type_sub_services.update',['ticket_type_sub_service'=>$dbSubService->id])}}" method="edit">
                                            
                                            <x-form.input col="12" label="Sub-Serviço" id="title" required="required" value="{{$dbSubService->title}}" />
                                            
                                        </x-form.form>
                                        
                                    </x-button.minButtonModalEdit>
                                </td>
                            </tr>
                        @endforeach
                    @endslot
                </x-table.table>
            </div>
        </x-conteiner>
    @endslot
</x-pages.index>