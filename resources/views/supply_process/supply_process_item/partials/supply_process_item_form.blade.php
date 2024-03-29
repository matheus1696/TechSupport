<input type="text" name="process_id" value="{{$dbSupplyProcesses->id}}" hidden>
<x-form.input col="4" label="Nº Processo" id="disabled" disabled='disabled' value='{{$dbSupplyProcesses->code_process}}' />
<x-form.input col="4" label="Nº Pregão" id="disabled" disabled='disabled' value='{{$dbSupplyProcesses->code_auction}}' />
<x-form.input col="4" label="Nº Contrato" id="disabled" disabled='disabled' value='{{$dbSupplyProcesses->code_contract}}' />
<x-form.input col="12" label="Titulo do Processo" id="disabled" disabled='disabled' value='{{$dbSupplyProcesses->title}}' />

<x-form.select col="8" label="Produto" id="product_id" required="required">
    @foreach ($dbProducts as $item)
        <option value="{{$item->id}}" @isset($db) @if ($db->product_id == $item->id) selected @endif @endisset>
            {{$item->title}}
        </option>
    @endforeach
</x-form.select>

<x-form.select col="4" label="Medidas" id="units_id" required="required">
    @foreach ($dbUnits as $item)
        <option value="{{$item->id}}" @isset($db) @if ($db->units_id == $item->id) selected @endif @endisset>
            {{$item->title}}
        </option>
    @endforeach
</x-form.select>

<x-form.input col="2" type="number" label="ADM" id="amount_adm" value="{{$db->amount_adm ?? ''}}"/>
<x-form.input col="2" type="number" label="ATB" id="amount_atb" value="{{$db->amount_atb ?? ''}}"/>
<x-form.input col="2" type="number" label="MAC" id="amount_mac" value="{{$db->amount_mac ?? ''}}"/>
<x-form.input col="2" type="number" label="VEPD" id="amount_vepd" value="{{$db->amount_vepd ?? ''}}"/>
<x-form.input col="2" type="number" label="VSAN" id="amount_vsan" value="{{$db->amount_vsan ?? ''}}"/>

<x-form.input col="12" type="number" label="Garantia (em Meses)" id="warranty" required="required" value="{{$db->warranty ?? ''}}" placeholder="Tempo de Garantia" />

<x-form.input col="12" label="Modelo de Referência 1" id="reference_model_1" value="{{$db->reference_model_1 ?? ''}}"  placeholder="Modelo de Referência" />
<x-form.input col="12" label="Modelo de Referência 2" id="reference_model_2" value="{{$db->reference_model_2 ?? ''}}"  placeholder="Modelo de Referência" />
<x-form.input col="12" label="Modelo de Referência 3" id="reference_model_3" value="{{$db->reference_model_3 ?? ''}}"  placeholder="Modelo de Referência" />