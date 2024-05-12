<x-form.form method="create" route="{{route('inventory_histories.store')}}">
    <input type="hidden" name="establishment_id" value="{{$db->id}}">

    <x-form.input col="2" label="Data" type="date" id="date" value="{{date('Y-m-d')}}" max="{{date('Y-m-d')}}" min="{{date('1900-01-01')}}" required="required"/>

    <x-form.select col="6" label="Produto" id="consumable_id">
        @foreach ($dbConsumables as $dbConsumable)
        <option value="{{$dbConsumable->id}}">
            {{$dbConsumable->consumable}}
        </option>
        @endforeach
    </x-form.select>

    <x-form.select col="2" label="Movimento" id="movement">
        <option value="Saída" selected>Saída</option>
        <option value="Entrada">Entrada</option>
    </x-form.select>

    <x-form.input col="2" label="Quantidade" type="number" id="quantity" value="{{$db->birthday}}" min="0" required="required"/>
</x-form.form>