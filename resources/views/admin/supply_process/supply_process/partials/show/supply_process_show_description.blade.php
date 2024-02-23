<div class="text-sm row px-lg-2 py-lg-2">
    <p class="col-lg-4"><strong>Nº do Processo: </strong>{{$db->code_process ?? ""}}</p>
    <p class="col-lg-4"><strong>Nº do Pregão: </strong>{{$db->code_auction ?? ""}}</p>
    <p class="col-lg-4"><strong>Nº do Contrato: </strong>{{$db->code_contract ?? ""}}</p>
    <p class="col-lg-6"><strong>Nº do Regristro de Preço: </strong>{{$db->code_contract ?? ""}}</p>
    <p class="col-lg-12"><strong>Titulo: </strong>{{$db->title ?? ""}}</p>
    <div class="mb-3 col-lg-12">
        <strong>Objetivo: </strong>
        {!! $db->description ?? "" !!}
    </div>
    <p class="col-lg">
        <strong>Data Inicio: </strong>{{$db->start_date == NULL ? "" : date('d/m/Y',strtotime($db->start_date))}}
    </p>
    <p class="col-lg">
        <strong>Data de Venc.: </strong>{{$db->due_date == NULL ? "" : date('d/m/Y',strtotime($db->due_date))}}
    </p>
    <p class="col-lg"><strong>Tempo de Vigência:</strong>
        {{$db->validity}}
        @if($db->validity) Meses @endif
    </p>
</div>