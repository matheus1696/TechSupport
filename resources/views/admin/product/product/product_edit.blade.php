
    <!-- Inicio de Componentização Page Edit -->
    <x-pages.forms method="edit" route="{{route('products.update',['product'=>$db->id])}}" btnBack="{{route('products.index')}}">
        <x-form.input col="2" label="Código" id="code" required="required" value="{{$db->code}}"/>
        <x-form.input col="7" label="Produto" id="product" required="required" value="{{$db->product}}"/>

        <x-form.select col="3" label="Tipo do Produto" id="type">
            <option @if($db->type == "consumo") selected @endif value="consumo">Consumo</option>
            <option @if($db->type == "permanente") selected @endif  value="permanente">Permanente</option>
        </x-form.select>

        <x-form.textarea col="12" label="Descrição" id="description" required="required" value="{{$db->description}}"/>
    </x-pages.edit>
