<x-pages.index>
    
    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Entrada de Suprimentos Avulsa"
            routeBack="{{route('inventory_supplies.show', ['inventory_supply'=>$db->id])}}"
        />
    @endslot
    
    <!-- Slot Body -->
    @slot('body')

        @if ($errors->any())
            <div class="relative px-4 py-3 mb-3 text-red-700 bg-red-100 border border-red-400 rounded" role="alert">
                <span class="block sm:inline">Houve alguns problema ao realizar a movimentação.</span>
                <ul class="mt-3 text-sm text-red-600 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <x-conteiner>
            <x-form.form method="create" route="{{route('inventory_supplies.entryStore')}}">
                <input type="hidden" name="establishment_department_id" value="{{$db->id}}">
                <input type="hidden" name="establishment_id" value="{{$db->establishment_id}}">
            
                <x-form.input col="2" label="Data" type="date" name="date" id="date" value="{{date('Y-m-d')}}" max="{{date('Y-m-d')}}" min="{{date('1900-01-01')}}" required="required"/>
            
                <x-form.select col="8" label="Suprimento" id="supply_id" name="supply_id">
                    @foreach ($dbSupplies as $dbSupply)
                    <option value="{{$dbSupply->id}}">
                        {{$dbSupply->title}}
                    </option>
                    @endforeach
                </x-form.select>
            
                <x-form.input col="2" label="Quantidade" type="number" id="quantity" name="quantity" value="{{$db->quantity}}" min="0" required="required"/>
            
                <x-form.textarea col="12" label="Descrição da Movimentação" id="description" name="description" value="{{$db->description ?? 'Entrada de suprimento avulsa'}}"/>
            </x-form.form>
        </x-conteiner>
    @endslot
    
</x-pages.index>