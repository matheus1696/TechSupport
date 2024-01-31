<!-- Inicio de Componentização Page Create -->
<x-pages.forms method="create" route="{{route('biddingItens.store')}}" btnBack="{{route('biddings.show',['bidding'=>$dbBidding->id])}}">
    @slot('body')
        <input type="text" name="process_id" value="{{$dbBidding->id}}" hidden>
        <x-form.input col="4" label="Nº Processo" id="disabled" disabled='disabled' value='{{$dbBidding->code_process}}' />
        <x-form.input col="4" label="Nº Pregão" id="disabled" disabled='disabled' value='{{$dbBidding->code_auction}}' />
        <x-form.input col="4" label="Nº Contrato" id="disabled" disabled='disabled' value='{{$dbBidding->code_contract}}' />
        <x-form.input col="12" label="Titulo do Processo" id="disabled" disabled='disabled' value='{{$dbBidding->title}}' />

        <x-form.select col="8" label="Produto" id="product_id">
            @foreach ($dbProducts as $item)
            <option value="{{$item->id}}">{{$item->title}}</option>
            @endforeach
        </x-form.select>

        <x-form.select col="4" label="Medidas" id="units_id">
            @foreach ($dbUnits as $item)
            <option value="{{$item->id}}">{{$item->title}}</option>
            @endforeach
        </x-form.select>

        <x-form.input col="2" type="number" label="Qt. ADM" id="amount_adm" />
        <x-form.input col="2" type="number" label="Qt. ATB" id="amount_atb" />
        <x-form.input col="2" type="number" label="Qt. MAC" id="amount_mac" />
        <x-form.input col="2" type="number" label="Qt. V. EPD" id="amount_vepd" />
        <x-form.input col="2" type="number" label="Qt. V. SAN" id="amount_vsan" />

        <x-form.input col="12" type="number" label="Garantia (em Meses)" id="warranty" required="required" />

        <x-form.input col="12" label="Modelo de Referência 1" id="reference_model_1" />
        <x-form.input col="12" label="Modelo de Referência 2" id="reference_model_2" />
        <x-form.input col="12" label="Modelo de Referência 3" id="reference_model_3" />
    @endslot
</x-pages.create>
