<x-form.input col="3" label="Código" id="code" value="{{$db->code ?? ''}}" />
<x-form.input col="9" label="Produto" id="title" value="{{$db->title ?? ''}}" />
<x-form.textarea col="12" label="Descrição do Produto" id="description" value="{{$db->description ?? ''}}"/>

<x-form.select col="4" label="Apresentação" id="product_classification_id">
    @foreach ($dbMedicationClassifications as $dbMedicationClassification)
        <option value="{{$dbMedicationClassification->id}}" @isset($db) @if ($db->product_classification_id == $dbMedicationClassification->id) selected @endif @endisset>
            {{$dbMedicationClassification->title}}
        </option>
    @endforeach
</x-form.select>

<x-form.select col="4" label="Apresentação" id="product_unit_id">
    @foreach ($dbMedicationUnits as $dbMedicationUnit)
        <option value="{{$dbMedicationUnit->id}}" @isset($db) @if ($db->product_unit_id == $dbMedicationUnit->id) selected @endif @endisset>
            {{$dbMedicationUnit->title}}
        </option>
    @endforeach
</x-form.select>

<x-form.select col="4" label="Tipo do Produto" id="product_type_id">
    @foreach ($dbMedicationTypes as $dbMedicationType)
        <option value="{{$dbMedicationType->id}}" @isset($db) @if ($db->product_type_id == $dbMedicationType->id) selected @endif @endisset>
            {{$dbMedicationType->title}}
        </option>
    @endforeach
</x-form.select>

