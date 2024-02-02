<x-pages.forms method="edit" route="{{route('establishments.contact.update',['contact'=>$db->id])}}" btnBack="{{route('establishments.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Editar Contato {{$dbEstablishments->title}}" />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        <input type="hidden" name="estabelecimento_id" value="{{$dbEstablishments->id}}">
        <x-form.input col="5" label="Departamento" id="department" required="required" value="{{ $db->department}}" />
        <x-form.input col="2" type="tel" label="Telefone" id="contact_1" value="{{ $db->contact_1}}" />
        <x-form.input col="2" type="number" label="Ramal" id="contact_2" value="{{ $db->contact_2}}" />
        
        <x-form.select col="3" label="Contato Principal" id="type">
            <option @if($db->type == "Main") selected @endif value="Main">Principal</option>
            <option @if($db->type == "Internal") selected @endif value="Internal">Interno</option>
        </x-form.select>
    @endslot
</x-pages.forms>


