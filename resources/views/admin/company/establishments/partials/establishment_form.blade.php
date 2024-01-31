<x-form.input col="2" label="CNES" id="code" required="required" value="{{$db->code ?? ''}}" />
<x-form.input col="10" label="Nome do Estabelecimento" id="title" required="required" value="{{$db->establishment ?? ''}}" />
<x-form.input col="10" label="Logradouro" id="address" required="required" value="{{$db->address ?? ''}}" />
<x-form.input col="2" label="Número" id="number" required="required" value="{{$db->number ?? ''}}" />
<x-form.input col="4" label="Bairro" id="district" required="required" value="{{$db->district ?? ''}}" />

<x-form.select col="4" label="Cidade" id="city_id" required="required">
    @foreach ($dbRegionCities as $item)
        <option value="{{$item->id}}" @isset($db) @if ($db->city_id == $item->id) selected @endif @endisset>
            {{$item->code_ibge}} | {{$item->city}} - {{$item->RegionStates->acronym}}
        </option>
    @endforeach
</x-form.select>

<x-form.input col="2" label="Latitude" id="latitude" value="{{$db->latitude ?? ''}}" />
<x-form.input col="2" label="Longitude" id="longitude" value="{{$db->longitude ?? ''}}" />

<x-form.select col="6" label="Tipo de Estabelecimento" id="type_establishment_id" required="required">
    @foreach ($dbCompanyTypeEstablishments as $item)
        <option value="{{$item->id}}" @isset($db)  @if ($db->type_establishment_id == $item->id) selected @endif @endisset>
            {{$item->type_establishment}}
        </option>
    @endforeach
</x-form.select>

<x-form.select col="6" label="Nível de Atenção" id="attention_level_id" required="required">
    @foreach ($dbCompanyAttentionLevels as $item)
        <option value="{{$item->id}}" @isset($db)  @if ($db->attention_level_id == $item->id) selected @endif @endisset>
            {{$item->attention_level}}
        </option>
    @endforeach
</x-form.select>