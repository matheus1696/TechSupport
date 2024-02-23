<div class="col-12">
    <x-table.table>
        @slot('thead')
            <tr>
                <th class="col-5">Setor</th>
                <th class="col-2">Telefone</th>
                <th class="col-2">Ramal</th>
                <th class="col-2">Tipo de Contato</th>
                <th style="width: 100px"></th>
            </tr>
        @endslot
    
        @slot('tbody')
            @foreach ($dbDepartments as $dbDepartment)
                <tr>
                    <td>{{$dbDepartment->department}}</td>
                    <td class="text-center">{{$dbDepartment->contact}}</td>
                    <td class="text-center">{{$dbDepartment->extension}}</td>
                    <td class="text-center">                        
                        @if($dbDepartment->type_contact === "Main") Contato Externo @endif
                        @if($dbDepartment->type_contact === "Internal") Ramal Interno @endif
                    </td>
                    <td class="text-center">
                        
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
                    </td>
                </tr>
            @endforeach
        @endslot
    </x-table.table>
</div>