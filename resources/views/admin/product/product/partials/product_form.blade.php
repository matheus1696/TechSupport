<x-form.input col="3" label="Código" id="code" value="{{$db->code ?? ''}}" />
<x-form.input col="9" label="Produto" id="title" value="{{$db->title ?? ''}}" />
<x-form.textarea col="12" label="Descrição do Produto" id="description" value="{{$db->description ?? ''}}"/>

<x-form.select col="4" label="Classificação" id="product_classification_id">
    @foreach ($dbProductClassifications as $dbProductClassification)
        <option value="{{$dbProductClassification->id}}" @isset($db) @if ($db->product_classification_id == $dbProductClassification->id) selected @endif @endisset>
            {{$dbProductClassification->title}}
        </option>
    @endforeach
</x-form.select>

<x-form.select col="4" label="Apresentação" id="product_unit_id">
    @foreach ($dbProductUnits as $dbProductUnit)
        <option value="{{$dbProductUnit->id}}" @isset($db) @if ($db->product_unit_id == $dbProductUnit->id) selected @endif @endisset>
            {{$dbProductUnit->title}}
        </option>
    @endforeach
</x-form.select>

<x-form.select col="4" label="Tipo do Produto" id="product_type_id">
    @foreach ($dbProductTypes as $dbProductType)
        <option value="{{$dbProductType->id}}" @isset($db) @if ($db->product_type_id == $dbProductType->id) selected @endif @endisset>
            {{$dbProductType->title}}
        </option>
    @endforeach
</x-form.select>

