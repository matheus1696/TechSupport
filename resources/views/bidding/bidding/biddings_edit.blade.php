
    <!-- Inicio de Componentização Page Edit -->
    <x-pages.forms method="edit" route="{{route('biddings.update',['bidding'=>$db->id])}}" btnBack="{{route('biddings.show',['bidding'=>$db->id])}}">
        <x-form.input col="12" label="Título" id="process" required="required" value="{{$db->process}}"/>
        <x-form.textarea col="12" label="Objeto" id="description" required="required" value="{{$db->description}}"/>
        <x-form.input col="2" label="Nº Processo" id="code_process" value="{{$db->code_process}}"/>
        <x-form.input col="2" label="Nº Pregão" id="code_auction" value="{{$db->code_auction}}"/>
        <x-form.input col="2" label="Nº Contrato" id="code_contract" value="{{$db->code_contract}}"/>
        <x-form.input col="3" label="Data de Inicío" type="date" id="start_date" value="{{$db->start_date}}" max="{{date('Y-m-d')}}"/>
        <x-form.input col="3" label="Data de Vencimento" type="date" id="due_date" value="{{$db->due_date}}"/>
    </x-pages.edit>
