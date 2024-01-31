<x-form.input col="2" label="Código" id="code" required="required" value="{{$db->code ?? ''}}" />
<x-form.input col="7" label="Produto" id="title" required="required" value="{{$db->title ?? ''}}" />

<x-form.select col="3" label="Tipo do Produto" id="type">
    <option @isset($db) @if($db->type == "Consumption") selected @endif @endisset value="Consumption">Consumo</option>
    <option @isset($db) @if($db->type == "Permanent") selected @endif @endisset value="Permanent">Permanente</option>
</x-form.select>

<x-form.textarea col="12" label="Descrição" id="description" required="required" value="{{$db->description ?? ''}}" />