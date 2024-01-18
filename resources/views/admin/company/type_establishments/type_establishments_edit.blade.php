<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('type_establishments.update',['type_establishment'=>$db->id])}}"
    btnBack="{{route('type_establishments.index')}}">
    <x-form.input col="12" label="Tipo de Estabelecimento" id="type_establishment"
        value="{{$db->type_establishment}}" />
</x-pages.forms>
