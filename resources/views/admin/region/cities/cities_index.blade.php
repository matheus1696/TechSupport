<x-pages.index paginate="{{$db->links()}}">
    @slot('body')
    <x-conteiner>

        <div class="pb-3">
            <form method="get" class="row">
                <x-form.input col="11" label="Cidades" id="searchName" placeholder="Pesquisa por Cidades"
                    value="{{$search['searchName'] ?? ''}}" />
                <x-button.buttonSearch col="1" />
            </form>
        </div>

        <x-table.table>
            @slot('thead')
            <tr>
                <th class="text-center col-1">IBGE</th>
                <th>Municipios</th>
                <th class="col-2">Estados</th>
                <th class="text-center col-1">Status</th>
            </tr>
            @endslot

            @slot('tbody')
            @foreach ($db as $item)
            <tr>
                <td class="text-center">{{$item->code_ibge}}</td>
                <td>{{$item->city}}</td>
                <td>{{$item->RegionStates->state}}</td>
                <td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}"
                        route="{{route('cities.status',['city'=>$item->id])}}" name="status" />
                </td>
            </tr>
            @endforeach
            @endslot
        </x-table.table>
    </x-conteiner>
    @endslot
</x-pages.index>