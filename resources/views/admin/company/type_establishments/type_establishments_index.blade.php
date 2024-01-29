<x-pages.index paginate="{{$db->links()}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Tipo de Estabelecimento"/>
    @endslot
    
    @slot('body')
    <x-conteiner>
        <x-table.table>
            @slot('thead')
            <tr>
                <th>Tipo de Estabelecimento</th>
                <th class="text-center col-1">Status</th>
                <th class="col-3 col-xl-2"></th>
            </tr>
            @endslot

            @slot('tbody')
            @foreach ($db as $item)
            <tr>
                <td>{{$item->type_establishment}}</td>
                <td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}"
                        route="{{route('type_establishments.update',['type_establishment'=>$item->id])}}"
                        name="status" />
                </td>
                <td class="text-center">
                    <x-button.minButtonModal id="TypeEstablishmentsModal{{$item->id}}" title="Unidades Cadastradas">
                        <ul>
                            @foreach ($dbEstablishments as $dbEstablishment)
                            @if ($dbEstablishment->type_establishment_id == $item->id)
                            <li>{{$dbEstablishment->establishment}}</li>
                            @endif
                            @endforeach
                        </ul>
                    </x-button.minButtonModal>
                    <x-button.minButtonEdit
                        route="{{route('type_establishments.edit',['type_establishment'=>$item->id])}}" />
                    <x-button.minButtonDelete
                        route="{{route('type_establishments.destroy',['type_establishment'=>$item->id])}}" />
                </td>
            </tr>
            @endforeach
            @endslot
        </x-table.table>
    </x-conteiner>
    @endslot
</x-pages.index>
