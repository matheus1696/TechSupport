<x-pages.index>
    
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Serviços: Categoria {{ $db->title }} ({{$db->amount_services ?? 0}})"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')

        <x-conteiner>
            <x-form.form method="create" route="{{route('ticket_type_services.store')}}">
                <input type="hidden" name="ticket_type_category_id" value="{{$db->id}}">
                <x-form.input col="12" label="Serviço" id="title" required="required" />
            </x-form.form>
        </x-conteiner>

            <div class="my-3">
                <x-table.table>
                    @slot('thead')
                        <x-table.th>Serviço</x-table.th>
                        <x-table.th class="w-28">Class. Serviço</x-table.th>
                        <x-table.th class="w-28">Status</x-table.th>
                        <x-table.th class="w-40"></x-table.th>
                    @endslot
                
                    @slot('tbody')
                        @foreach ($dbServices as $dbService)
                            <x-table.tr>
                                <x-table.td>{{$dbService->title}}</x-table.td>  
                                <x-table.td class="text-center">{{$dbService->amount_sub_services ?? 0}}</x-table.td>                                
                                <x-table.td class="text-center">
                                    <x-button.buttonStatus condition="{{$dbService->status}}" route="{{route('ticket_type_services.status',['ticket_type_service'=>$dbService->id])}}" name="status"/>
                                </x-table.td>
                                <x-table.td class="text-center">
                                    
                                    <x-button.minButtonShow route="{{route('ticket_type_services.show',['ticket_type_service'=>$dbService->id])}}" />
                                    
                                    <x-button.minButtonModalEdit id="Subtipos{{$dbService->id}}" title="{{$dbService->title}}">
            
                                        <x-form.form route="{{route('ticket_type_services.update',['ticket_type_service'=>$dbService->id])}}" method="edit">
                                                                                        
                                            <x-form.input col="12" label="Serviço" id="title" required="required" value="{{$dbService->title}}" />
                                            
                                        </x-form.form>
                                        
                                    </x-button.minButtonModalEdit>
                                    
                                    <x-button.minButtonDelete route="{{route('ticket_type_services.destroy',['ticket_type_service'=>$dbService->id])}}" />
                                </x-table.td>
                            </x-table.tr>
                        @endforeach
                    @endslot
                </x-table.table>
            </div>
    @endslot
</x-pages.index>