<x-form.form method="create" route="{{route('establishment_departments.store')}}">
    <input type="hidden" name="establishment_id" value="{{$db->id}}">
    <x-form.input col="5" label="Departamento" id="department" required="required" />
    <x-form.input col="2" type="tel" label="Telefone" id="contact" />
    <x-form.input col="2" type="number" label="Ramal" id="extension" />                                

    <x-form.select col="3" label="Tipo de Contato" id="type_contact">
        <option value="Without">Sem Ramal</option>
        <option value="Main">Contato Externo</option>
        <option value="Internal">Ramal Interno</option>
    </x-form.select>
</x-form.form>