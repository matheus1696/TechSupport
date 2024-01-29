<!-- Inicio de Componentização Page Index -->
<x-pages.index paginate="{{$db->links()}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Unidade de Medida" :route="route('units.create')" />
    @endslot

    <!-- Slot Body -->
    @slot('body')
    <x-conteiner>

        <div class="pb-3">
            <form method="get" class="row">
                <x-form.input col="11" label="Unidade de Medida" id="searchName" placeholder="Pesquisa por Nome"
                    value="{{$search['searchName'] ?? ''}}" />
                <x-button.buttonSearch />
            </form>
        </div>

        <x-table.table>
            @slot('thead')
                <tr>
                    <th>Unidade de Medida</th>
                    <th class="text-center col-1">Status</th>
                    <th class="text-center col-1"></th>
                </tr>
            @endslot

            @slot('tbody')
                @foreach ($db as $item)
                    <tr>
                        <td>{{$item->unit}}</td>
                        <td class="text-center">
                            <x-button.buttonStatus condition="{{$item->status}}" name="status"
                                route="{{route('units.status',['unit'=>$item->id])}}" />
                        </td>
                        <td>
                            <x-button.minButtonEdit route="{{route('units.edit',['unit'=>$item->id])}}" />
                        </td>
                    </tr>
                @endforeach
            @endslot
        </x-table.table>

    </x-conteiner>
    @endslot
</x-pages.index>