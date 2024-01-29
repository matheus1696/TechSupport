<x-pages.index paginate="{{$db->links()}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Processos Licitatórios"/>
    @endslot
    
    @slot('body')
    <x-conteiner>

        <div class="pb-3">
            <form method="get" class="row">
                <x-form.input col="3" label="Nº do Processo" id="searchCod" placeholder="Pesquisa por Código"
                    value="{{$search['searchCod'] ?? ''}}" />
                <x-form.input col="8" label="Titulo do Processo" id="searchtName" placeholder="Pesquisa por Nome"
                    value="{{$search['searchtName'] ?? ''}}" />
                <x-button.buttonSearch />
            </form>
        </div>

        <x-table.table>
            @slot('thead')
            <tr>
                <th class="text-xs text-center col-1">Nº Processo</th>
                <th class="text-xs text-center col-1">Nº Pregão</th>
                <th class="text-xs text-center col-1">Nº Contrato</th>
                <th class="text-xs text-center">Titulo do Processo</th>
                <th class="text-xs text-center col-1">Data Início</th>
                <th class="text-xs text-center col-1">Data Venc.</th>
                <th class="text-xs text-center col-1">Status</th>
                <th class="text-xs text-center col-2"></th>
            </tr>
            @endslot

            @slot('tbody')
            @foreach ($db as $item)
            <tr @if ($item->data_vencimento < Today() && $item->data_vencimento != NULL)
                    style="background: rgba(255, 0, 0, 0.500)"
                    @elseif($item->data_vencimento < date('Y-m-d', strtotime("+90 days")) && $item->data_vencimento !=
                        NULL)
                        style="background: rgba(255, 255, 0, 0.500)"
                        @endif
                        >
                        <td class="text-center">{{$item->cod_processo}}</td>
                        <td class="text-center">{{$item->cod_pregao}}</td>
                        <td class="text-center">{{$item->cod_contrato}}</td>
                        <td>{{$item->no_processo}}</td>
                        <td class="text-center">{{$item->data_inicio == NULL ? "" :
                            date('d/m/Y',strtotime($item->data_inicio))}}</td>
                        <td class="text-center">{{$item->data_vencimento == NULL ? "" :
                            date('d/m/Y',strtotime($item->data_vencimento))}}</td>
                        <td class="text-center">
                            <x-button.buttonStatus condition="{{$item->st_processo}}" name="st_processo"
                                route="{{route('biddings.status',['bidding'=>$item->id])}}" />
                        </td>
                        <td class="text-center">
                            <x-button.minButtonModal id="Bidding{{$item->id}}"
                                title="Informação do Processo Licitatório">
                                <div class="row justify-content-center" @if ($item->data_vencimento < Today() && $item->
                                        data_vencimento != NULL)
                                        style="background: rgba(255, 0, 0, 0.500);border-radius: 5px; padding: 10px;"
                                        @elseif($item->data_vencimento < date('Y-m-d', strtotime("+90 days")) && $item->
                                            data_vencimento != NULL)
                                            style="background: rgba(255, 255, 0, 0.500);border-radius: 5px; padding:
                                            10px;"
                                            @endif
                                            >
                                            <div class="row justify-content-center ">
                                                <div class="my-2 col-lg-4"><strong>Nº do Processo</strong>
                                                    {{$item->cod_processo}}</div>
                                                <div class="my-2 col-lg-4"><strong>Nº do Pregão:</strong>
                                                    {{$item->cod_pregao}}</div>
                                                <div class="my-2 col-lg-4"><strong>Nº do Contrato:</strong>
                                                    {{$item->cod_contrato}}</div>
                                                <div class="my-2 col-lg-12"><strong>Título:</strong>
                                                    {{$item->no_processo}}</div>
                                                <div class="col-lg-12">
                                                    <strong>Objetivo:</strong>{!!$item->desc_processo!!}</div>
                                                <div class="my-2 col-lg-4"><strong>Início:</strong> {{$item->data_inicio
                                                    == NULL ? "" : date('d/m/Y',strtotime($item->data_inicio))}}</div>
                                                <div class="my-2 col-lg-4"><strong>Vencimento:</strong>
                                                    {{$item->data_vencimento == NULL ? "" :
                                                    date('d/m/Y',strtotime($item->data_vencimento))}}</div>
                                                <div class="my-2 col-lg-4"><strong>Vigência:</strong>
                                                    {{$item->tempo_vigencia}} meses</div>
                                                <h6 class="my-2 text-center col-12">Lista de Itens</h6>
                                                <div class="my-2 col-12">
                                                    <x-table.table>
                                                        @slot('thead')
            <tr>
                <td class="text-center col-3">Cód.</td>
                <td class="text-center col-7">Nome Produto</td>
                <td class="text-center col-2">Quant. Total</td>
            </tr>
            @endslot
            @foreach ($dbBiddigItens as $dbBiddigItem)
            @if ($item->id == $dbBiddigItem->processo_id)
            @slot('tbody')
            <tr>
                <td class="text-center">{{$dbBiddigItem->Product->cod_produto ?? ""}}</td>
                <td class="text-center">{{$dbBiddigItem->Product->no_produto ?? ""}}</td>
                <td class="text-center">{{$dbBiddigItem->quant_adm + $dbBiddigItem->quant_atb + $dbBiddigItem->quant_mac
                    + $dbBiddigItem->quant_vsan + $dbBiddigItem->quant_vepd ?? ""}}</td>
            </tr>
            @endslot
            @endif
            @endforeach
        </x-table.table>
        </div>
        </div>
        </div>
        </x-button.minButtonModal>
        <x-button.minButtonShow route="{{route('biddings.show',['bidding'=>$item->id])}}" />
        <x-button.minButtonEdit route="{{route('biddings.edit',['bidding'=>$item->id])}}" />
        </td>
        </tr>
        @endforeach
        @endslot
        </x-table.table>

    </x-conteiner>
    @endslot
</x-pages.index>


