<!-- Inicio de Componentização Page Index -->
<x-pages.index paginate="{{$db->links()}}">

    <!-- Slot Header -->
    @slot('header')
    <x-header title="Lista de Produtos" />
    @endslot

    @slot('body')
    <x-conteiner>

        <div class="pb-3">
            <form method="get" class="row">
                <x-form.input col="3" label="Código" id="searchProductCod" placeholder="Pesquisa por Código"
                    value="{{$search['searchProductCod'] ?? ''}}" />
                <x-form.input col="8" label="Produto" id="searchProdutcName" placeholder="Pesquisa por Nome"
                    value="{{$search['searchProdutcName'] ?? ''}}" />
                <x-button.buttonSearch col="1" />
            </form>
        </div>

        <x-table.table>
            @slot('thead')
            <tr>
                <th class="text-center col-2">Código</th>
                <th>Produto</th>
                <th class="text-center col-1">Tipo</th>
                <th class="text-center col-1">Status</th>
                <th class="text-center col-1"></th>
            </tr>
            @endslot

            @slot('tbody')
            @foreach ($db as $item)
            <tr>
                <td class="text-center">{{$item->cod_produto}}</td>
                <td>{{$item->no_produto}}</td>
                <td>{{$item->tp_produto}}</td>
                <td class="text-center">
                    <x-button.buttonStatus condition="{{$item->st_produto}}" name="st_produto"
                        route="{{route('products.status',['product'=>$item->id])}}" />
                </td>
                <td>
                    <x-button.minButtonEdit route="{{route('products.edit',['product'=>$item->id])}}" />
                </td>
            </tr>
            @endforeach
            @endslot
        </x-table.table>

    </x-conteiner>
    @endslot
</x-pages.index>