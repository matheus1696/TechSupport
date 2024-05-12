<x-form.form method="create" route="{{route('inventory_product_histories.store')}}">
    <input type="hidden" name="establishment_department_id" value="{{$db->id}}">
    <input type="hidden" name="establishment_id" value="{{$db->establishment_id}}">

    <x-form.input col="2" label="Data" type="date" id="date" value="{{date('Y-m-d')}}" max="{{date('Y-m-d')}}" min="{{date('1900-01-01')}}" required="required"/>

    <x-form.select col="6" label="Produto" id="product_id">
        @foreach ($dbProducts as $dbProduct)
            <option value="{{$dbProduct->id}}"> {{$dbProduct->title}} </option>
        @endforeach
    </x-form.select>

    <x-form.select col="2" label="Movimentação" id="movement">
        <option value="Saída" selected>Saída</option>
        <option value="Entrada">Entrada</option>
    </x-form.select>

    <x-form.input col="2" label="Quantidade" type="number" id="quantity" value="{{$db->birthday}}" min="0" required="required"/>

    <x-form.textarea col="12" label="Descrição do Setor" id="description" value="{{$db->description ?? ''}}"/>
</x-form.form>