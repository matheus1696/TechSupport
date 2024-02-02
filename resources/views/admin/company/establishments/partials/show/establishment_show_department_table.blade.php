<div class="col-12">
    <x-table.table>
        @slot('thead')
            <tr>
                <th class="col-5">Setor</th>
                <th class="col-2">Telefone</th>
                <th class="col-2">Ramal</th>
                <th class="col-2">Tipo</th>
                <th class="col-1"></th>
            </tr>
        @endslot
    
        @slot('tbody')
            @foreach ($dbDepartments as $dbDepartment)
                <tr>
                    <td>{{$dbDepartment->department}}</td>
                    <td class="text-center">{{$dbDepartment->contact_1}}</td>
                    <td class="text-center">{{$dbDepartment->contact_2}}</td>
                    <td class="text-center">{{$dbDepartment->type}}</td>
                    <td class="text-center">
                        <x-button.minButtonEdit
                            route="{{route('establishmentContacts.edit',['establishmentContact'=>$dbDepartment->id])}}">
                        </x-button.minButtonEdit>
                        <x-button.minButtonDelete route="{{route('establishmentContacts.destroy',['establishmentContact'=>$dbDepartment->id])}}">
                        </x-button.minButtonDelete>
                    </td>
                </tr>
            @endforeach
        @endslot
    </x-table.table>
</div>