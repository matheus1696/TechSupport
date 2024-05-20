<x-form.input col="3" label="Código" id="code" name="code" value="{{$db->code ?? ''}}" />
<x-form.input col="9" label="Suprimento" id="title" name="title" value="{{$db->title ?? ''}}" />
<x-form.textarea col="12" label="Descrição do Suprimento" id="description" name="description" value="{{$db->description ?? ''}}"/>

<x-form.select col="4" label="Classificação" id="supply_classification_id" name="supply_classification_id"> 
    @foreach ($dbSupplyClassifications as $dbSupplyClassification)
        <option value="{{$dbSupplyClassification->id}}" @isset($db) @if ($db->supply_classification_id == $dbSupplyClassification->id) selected @endif @endisset>
            {{$dbSupplyClassification->title}}
        </option>
    @endforeach
</x-form.select>

<x-form.select col="4" label="Apresentação" id="supply_unit_id" name="supply_unit_id">
    @foreach ($dbSupplyUnits as $dbSupplyUnit)
        <option value="{{$dbSupplyUnit->id}}" @isset($db) @if ($db->supply_unit_id == $dbSupplyUnit->id) selected @endif @endisset>
            {{$dbSupplyUnit->title}}
        </option>
    @endforeach
</x-form.select>

<x-form.select col="4" label="Tipo do Produto" id="supply_type_id" name="supply_type_id">
    @foreach ($dbSupplyTypes as $dbSupplyType)
        <option value="{{$dbSupplyType->id}}" @isset($db) @if ($db->supply_type_id == $dbSupplyType->id) selected @endif @endisset>
            {{$dbSupplyType->title}}
        </option>
    @endforeach
</x-form.select>

