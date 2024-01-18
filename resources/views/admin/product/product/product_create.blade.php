
    <!-- Inicio de Componentização Page Create -->
    <x-pages.forms method="create" route="{{route('products.store')}}" btnBack="{{route('products.index')}}">
        <x-form.input col="2" label="Código" id="code" required="required"/>
        <x-form.input col="7" label="Produto" id="product" required="required"/>

        <x-form.select col="3" label="Tipo do Produto" id="type">
            <option value="Consumo">Consumo</option>
            <option value="Permanente">Permanente</option>
        </x-form.select>

        <x-form.textarea col="12" label="Descrição" id="description" required="required"/>
    </x-pages.forms>
