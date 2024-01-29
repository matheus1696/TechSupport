<!-- Inicio de Componentização Page Create -->
<x-pages.forms method="create" route="{{route('units.store')}}" btnBack="{{route('units.index')}}">
    <x-form.input col="12" label="Unidade de Medida" id="unit" required="required" />
</x-pages.forms>