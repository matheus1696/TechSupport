<div class="grid grid-cols-1 gap-3 mb-3 text-sm lg:grid-cols-4">    
    
    <div class="grid grid-cols-1 gap-3 mb-3 text-sm lg:grid-cols-2 lg:col-span-4">
        <h3 class="text-lg font-semibold lg:col-span-2">Demantante</h3>
        <p><strong>Nome: </strong>{{$db->demantant_name ?? ""}}</p>
        <p><strong>Setor: </strong>{{$db->demantant_organization ?? ""}}</p>
        <p><strong>Matrícula: </strong>{{$db->demantant_registration ?? ""}}</p>
        <p><strong>CPF: </strong>{{$db->demantant_cpf ?? ""}}</p>
        <hr class="lg:col-span-2">
    </div>

    <div class="grid grid-cols-1 gap-3 mb-3 text-sm lg:grid-cols-2 lg:col-span-4">
        <h3 class="text-lg font-semibold lg:col-span-2">Solicitante</h3>
        <p><strong>Nome: </strong>{{$db->requesting_name ?? ""}}</p>
        <p><strong>Setor: </strong>{{$db->requesting_organization ?? ""}}</p>
        <p><strong>Matrícula: </strong>{{$db->requesting_registration ?? ""}}</p>
        <p><strong>CPF: </strong>{{$db->requesting_cpf ?? ""}}</p>
        <hr class="lg:col-span-2">
    </div>

    <p class="lg:col-span-4"><strong>Titulo: </strong>{{$db->title ?? ""}}</p>
    <div class="lg:col-span-4"><strong>Objetivo: </strong> {!! $db->description ?? "" !!} </div>

    @if ($db->modality == 'bidding_process')
    
        <hr class="lg:col-span-4">
    
        <p><strong>Nº do Processo: </strong>{{$db->code_process ?? ""}}</p>
        <p><strong>Nº do Pregão: </strong>{{$db->code_auction ?? ""}}</p>
        <p><strong>Nº do Contrato: </strong>{{$db->code_contract ?? ""}}</p>
        <p><strong>Nº do Regristro de Preço: </strong>{{$db->code_contract ?? ""}}</p>        
        <p><strong>Data Inicio: </strong> {{$db->start_date == NULL ? "" : date('d/m/Y',strtotime($db->start_date))}}</p>
        <p><strong>Data de Venc.: </strong> {{$db->due_date == NULL ? "" : date('d/m/Y',strtotime($db->due_date))}}</p>
        <p><strong>Tempo de Vigência: </strong> {{$db->validity}} @if($db->validity) Meses @endif </p>
        <p><strong>Status: </strong> {{$db->SupplyProcessStatus->title}}</p>
    @endif
    
</div>