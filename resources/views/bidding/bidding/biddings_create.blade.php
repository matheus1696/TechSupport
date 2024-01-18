    <!-- Inicio de Componentização Page Create -->
    <x-pages.forms method="create" route="{{route('biddings.store')}}" btnBack="{{route('biddings.index')}}">
        <x-form.input col="12" label="Título" id="process" required="required"/>
        <x-form.textarea col="12" label="Objeto" id="description" required="required"/>
    </x-pages.create>
