<x-form.form method="create" route="{{route('inventory_warehouse_histories.store')}}">
    <input type="hidden" name="establishment_department_id" value="{{$db->id}}">
    <input type="hidden" name="establishment_id" value="{{$db->establishment_id}}">

    <x-form.input col="2" label="Nota Fiscal" type="number" id="invoice" value="{{$db->invoice ?? ''}}" required="required"/>
    <x-form.input col="2" label="O.F." id="supply_order" value="{{$db->supply_order ?? ''}}" required="required"/>
    <x-form.input col="6" label="Fornecedor" id="supply_company" value="{{$db->supply_company ?? ''}}" required="required"/>

    <x-form.select col="2" label="Bloco de Financiamento" id="financial_block_id">
        @foreach ($dbFinancialBlocks as $dbFinancialBlock)
            <option value="{{$dbFinancialBlock->id}}">
                {{$dbFinancialBlock->acronym}}
            </option>
        @endforeach
    </x-form.select>

    <x-form.input col="2" label="Data" type="date" id="date" value="{{date('Y-m-d')}}" max="{{date('Y-m-d')}}" min="{{date('1900-01-01')}}" required="required"/>

    <x-form.select col="8" label="Produto" id="product_id">
        @foreach ($dbProducts as $dbProduct)
            <option value="{{$dbProduct->id}}">
                {{$dbProduct->title}}
            </option>
        @endforeach
    </x-form.select>

    <x-form.input col="2" label="Quantidade" type="number" id="quantity" value="{{$db->birthday}}" min="0" required="required"/>
</x-form.form>