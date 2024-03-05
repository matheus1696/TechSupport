<div class="my-3">
    <x-table.table>
        @slot('thead')
            <x-table.th>Setor</x-table.th>
            <x-table.th class="w-40">Telefone</x-table.th>
            <x-table.th class="w-28">Ramal</x-table.th>
            <x-table.th class="w-40">Tipo de contato</x-table.th>
            <x-table.th class="w-40"></x-table.th>
        @endslot
    
        @slot('tbody')
            @foreach ($dbDepartments as $dbDepartment)
                <x-table.tr>
                    <x-table.td>{{$dbDepartment->department}}</x-table.td>
                    <x-table.td class="text-center">{{$dbDepartment->contact}}</x-table.td>
                    <x-table.td class="text-center">{{$dbDepartment->extension}}</x-table.td>
                    <x-table.td class="text-center">                        
                        @if($dbDepartment->type_contact == "Main") Contato Externo @endif
                        @if($dbDepartment->type_contact == "Internal") Ramal Interno @endif
                    </x-table.td>
                    <x-table.td class="text-center">
                        
                        <x-button.minButtonModalEdit id="Departamento{{$dbDepartment->id}}" title="{{$dbDepartment->department}}">

                            <x-form.form route="{{route('establishment_contacts.update',['establishment_contact'=>$dbDepartment->id])}}" method="edit">
                                
                                <x-form.input col="5" label="Departamento" id="department" required="required" value="{{ $dbDepartment->department}}" />
                                <x-form.input col="2" type="tel" label="Telefone" id="contact" value="{{ $dbDepartment->contact}}" />
                                <x-form.input col="2" type="number" label="Ramal" id="extension" value="{{ $dbDepartment->extension}}" />
                                
                                <x-form.select col="3" label="Tipo de Contato" id="type_contact{{$dbDepartment->id}}">
                                    <option @if($dbDepartment->type_contact === "Main") selected @endif value="Main">Contato Externo</option>
                                    <option @if($dbDepartment->type_contact === "Internal") selected @endif value="Internal">Ramal Interno</option>
                                </x-form.select>
                                
                            </x-form.form>
                            
                        </x-button.minButtonModalEdit>

                        <x-button.minButtonDelete route="{{route('establishment_contacts.destroy',['establishment_contact'=>$dbDepartment->id])}}">
                        </x-button.minButtonDelete>
                    </x-table.td>
                </x-table.tr>
            @endforeach
        @endslot
    </x-table.table>
</div>