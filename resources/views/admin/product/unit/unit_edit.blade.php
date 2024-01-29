<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('units.update',['unit'=>$db->id])}}" btnBack="{{route('units.index')}}">
    <x-form.input col="12" label="Unidade de Medida" id="unit" required="required" value="{{$db->unit}}" />
</x-pages.forms>