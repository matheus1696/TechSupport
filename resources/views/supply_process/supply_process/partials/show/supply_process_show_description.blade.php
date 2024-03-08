<div class="grid grid-cols-1 gap-3 mb-3 text-sm lg:grid-cols-4">
    <p><strong>Nº do Processo: </strong>{{$db->code_process ?? ""}}</p>
    <p><strong>Nº do Pregão: </strong>{{$db->code_auction ?? ""}}</p>
    <p><strong>Nº do Contrato: </strong>{{$db->code_contract ?? ""}}</p>
    <p><strong>Nº do Regristro de Preço: </strong>{{$db->code_contract ?? ""}}</p>
    <p class="lg:col-span-4"><strong>Titulo: </strong>{{$db->title ?? ""}}</p>
    <div class="lg:col-span-4"><strong>Objetivo: </strong> {!! $db->description ?? "" !!} </div>
    <p><strong>Data Inicio: </strong> {{$db->start_date == NULL ? "" : date('d/m/Y',strtotime($db->start_date))}}</p>
    <p><strong>Data de Venc.: </strong> {{$db->due_date == NULL ? "" : date('d/m/Y',strtotime($db->due_date))}}</p>
    <p><strong>Tempo de Vigência: </strong> {{$db->validity}} @if($db->validity) Meses @endif </p>
</div>