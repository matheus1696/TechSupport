<x-pages.index paginate="{{$db->links()}}">

    <!-- Slot Header -->
    @slot('header')
    <x-header title="Lista de Estados" />
    @endslot

    @slot('body')
    <x-conteiner>

        <div class="pb-3">
            <form method="get" class="row">
                <x-form.input col="11" label="Estados" id="searchName" placeholder="Pesquisa por Estados"
                    value="{{$search['searchName'] ?? ''}}" />
                <x-button.buttonSearch />
            </form>
        </div>

        <x-table.table>
            @slot('thead')
            <tr>
                <th class="text-center col-1">UF</th>
                <th class="text-center col-1">Sigla</th>
                <th>Estados</th>
                <th class="col-2">Paises</th>
                <th class="text-center col-1">Status</th>
            </tr>
            @endslot

            @slot('tbody')
            @foreach ($db as $item)
            <tr>
                <td class="text-center">{{$item->code_uf}}</td>
                <td class="text-center">{{$item->acronym}}</td>
                <td>{{$item->state}}</td>
                <td>{{$item->RegionCountries->country}}</td>
                <td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}"
                        route="{{route('states.status',['state'=>$item->id])}}" name="status" />
                </td>
            </tr>
            @endforeach
            @endslot
        </x-table.table>

    </x-conteiner>
    @endslot
</x-pages.index>