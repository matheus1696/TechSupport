<div class="flex flex-wrap items-center justify-center gap-3 my-3">
    <a href="{{route('supply_process_items.create',['supply_process'=>$db->id])}}" class="flex flex-col justify-center items-center bg-green-800 hover:bg-green-700 rounded shadow text-white text-center text-xs py-2.5 px-2">
        <p><i class="mb-1 text-sm fas fa-plus"></i></p>
        <p class="w-14">Cad. Item</p>
    </a>
    
    <a href="{{route('supply_processes.edit',['supply_process'=>$db->id])}}" class="flex flex-col justify-center items-center bg-yellow-500 hover:bg-yellow-400 rounded shadow text-white text-center text-xs py-2.5 px-2">
        <p><i class="mb-1 text-sm text-gray-700 fas fa-pen"></i></p>
        <p class="text-gray-700 w-14">Editar</p>
    </a>

    <div class="inline-block">
        <!-- Modal toggle -->
        <button 
            data-toggle="modal"
            data-target="#modalInfo"
            class="flex flex-col justify-center items-center bg-blue-600 hover:bg-blue-500 rounded shadow text-white text-center text-xs py-2.5 px-2" 
            type="button"
        >
            <p><i class="mb-1 text-sm fas fa-sitemap"></i></p>
            <p class="w-14">Setores</p>
        </button>
    
        <div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
            <div class="text-left modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="text-lg font-semibold modal-title" id="Modal">Setores Responsáveis</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="m-4 modal-body">
                        <div>
                            <x-form.form method="create" route="{{route('supply_linked_organizations.store')}}">
                                <input type="hidden" name="supply_id" value="{{$db->id}}">
                            
                                <x-form.select col="12" label="Setores" id="organization_id">
                                    @foreach ($dbOrganizations as $dbOrganization)
                                        <option value="{{$dbOrganization->id}}">
                                            {{$dbOrganization->acronym}} - {{$dbOrganization->title}}
                                        </option>
                                    @endforeach
                                </x-form.select>
                            </x-form.form>
                            
                            <hr>
                            <div class="mt-3">
                                <x-table.table>

                                    @slot('thead')
                                        <x-table.th>Setores</x-table.th>
                                        <x-table.th class="w-40"></x-table.th>
                                    @endslot

                                    @slot('tbody')
                                        @foreach ($dbLinkedOrganizations as $dbLinkedOrganization)
                                            <x-table.tr>
                                                <x-table.td>
                                                    {{$dbLinkedOrganization->CompanyOrganization->acronym}} - 
                                                    {{$dbLinkedOrganization->CompanyOrganization->title}}
                                                </x-table.td>
                                                <x-table.td>
                                                    <x-button.minButtonDelete route="{{route('supply_linked_organizations.destroy',['supply_linked_organization'=>$dbLinkedOrganization->id])}}" />
                                                </x-table.td>
                                            </x-table.tr>
                                        @endforeach
                                    @endslot    

                                </x-table.table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    

    <a href="{{route('supply_processes.index')}}" class="flex flex-col justify-center items-center bg-gray-600 hover:bg-gray-500 rounded shadow text-white text-center text-xs py-2.5 px-2">
        <p><i class="mb-1 text-sm fas fa-reply"></i></p>
        <p class="w-14">Voltar</p>
    </a>
</div>