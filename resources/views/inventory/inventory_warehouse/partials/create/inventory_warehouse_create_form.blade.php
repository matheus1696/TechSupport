<x-conteiner>
    <x-form.form method="create" route="{{route('inventory_warehouses.entryStore')}}">
        <input type="hidden" name="establishment_department_id" value="{{$db->id}}">
        <input type="hidden" name="establishment_id" value="{{$db->establishment_id}}">
        <input type="hidden" name="loose" value='1'>
    
        <x-form.input col="2" label="Data" type="date" name="date" id="date" value="{{date('Y-m-d')}}" max="{{date('Y-m-d')}}" min="{{date('1900-01-01')}}" required="required"/>
    
        <x-form.select col="8" label="Suprimento" id="consumable_id" name="consumable_id">
            @foreach ($dbConsumables as $dbConsumable)
            <option value="{{$dbConsumable->id}}">
                {{$dbConsumable->title}}
            </option>
            @endforeach
        </x-form.select>
    
        <x-form.input col="2" label="Quantidade" type="number" id="quantity" name="quantity" value="{{$db->quantity}}" min="0" required="required"/>
    
        <x-form.textarea col="12" label="Descrição da Movimentação" id="description" name="description" value="{{$db->description ?? 'Entrada de suprimento avulsa'}}"/>
    </x-form.form>
</x-conteiner>