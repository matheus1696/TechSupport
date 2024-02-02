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
                    <td>{{$dbDepartment->contact_1}}</td>
                    <td>{{$dbDepartment->contact_2}}</td>
                    <td>{{$dbDepartment->type}}</td>
                    <td class="text-center">
                        <x-button.minButtonEdit
                            route="{{route('establishments.contact.edit',['establishment'=>$dbDepartment->establishment_id, 'contact'=>$dbDepartment->id])}}">
                        </x-button.minButtonEdit>
                        <x-button.minButtonDelete route="{{route('establishments.contact.destroy',['contact'=>$dbDepartment->id])}}">
                        </x-button.minButtonDelete>
                    </td>
                </tr>
            @endforeach
        @endslot
    </x-table.table>
</div>