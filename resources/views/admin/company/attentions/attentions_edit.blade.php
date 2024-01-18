
    <!-- Inicio de Componentização Page Edit -->
    <x-pages.forms method="edit" route="{{route('attentions.update',['attention'=>$db->id])}}" btnBack="{{route('type_establishments.index')}}">
        <x-form.input col="12" label="Níveis de Atenção/Blocos" id="attention_level" value="{{$db->attention_level}}"/>
    </x-pages.forms>
