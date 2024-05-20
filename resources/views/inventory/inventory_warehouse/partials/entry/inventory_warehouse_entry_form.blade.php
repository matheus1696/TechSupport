<x-form.form method="create" route="{{route('inventory_warehouses.entryStore')}}" title="Adicionar ao estoque">
    <input type="hidden" name="establishment_department_entry_id" value="{{$db->id}}">
    <input type="hidden" name="establishment_entry_id" value="{{$db->establishment_id}}">

    <x-form.input col="2" label="Nota Fiscal" type="number" name="invoice" id="invoice" value="{{$db->invoice ?? ''}}" required="required" autofocus="autofocus"/>
    <x-form.input col="2" label="O.F." name="supply_order" id="supply_order" value="{{$db->supply_order ?? ''}}" required="required"/>
    <x-form.input col="6" label="Fornecedor" name="supply_company" id="supply_company" value="{{$db->supply_company ?? ''}}" required="required"/>

    <x-form.select col="2" label="Bloco de Financiamento" name="financial_block_id" id="financial_block_id">
        @foreach ($dbFinancialBlocks as $dbFinancialBlock)
            <option value="{{$dbFinancialBlock->id}}">
                {{$dbFinancialBlock->acronym}}
            </option>
        @endforeach
    </x-form.select>

    <x-form.input col="2" label="Data" type="date" name="date" id="date" value="{{date('Y-m-d')}}" max="{{date('Y-m-d')}}" min="{{date('1900-01-01')}}" required="required"/>

    <x-form.select col="8" label="Produto" name="supply_id" id="supply_id">
        @foreach ($dbSupplies as $dbSupply)
            <option value="{{$dbSupply->id}}">
                {{$dbSupply->title}}
            </option>
        @endforeach
    </x-form.select>

    <x-form.input col="2" label="Quantidade" type="number" name="quantity" id="quantity" value="{{$db->quantity}}" min="0" required="required"/>
        
    <x-form.textarea col="12" label="Descrição de Entrada" name="description" id="description" value="{{$db->description ?? ''}}"/>
</x-form.form>