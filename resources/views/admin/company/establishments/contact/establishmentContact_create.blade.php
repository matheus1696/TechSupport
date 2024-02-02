<x-pages.forms method="create" route="{{route('establishments.contact.store')}}" btnBack="{{route('establishments.index')}}">
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Cadastrar Contato {{$dbEstablishments->title}}" />
    @endslot

    @slot('body')
    
        <input type="hidden" name="establishment_id" value="{{$dbEstablishments->id}}">
        <x-form.input col="5" label="Departamento" id="department" required="required" />
        <x-form.input col="2" type="tel" label="Telefone" id="contact_1" />
        <x-form.input col="2" type="number" label="Ramal" id="contact_2" />
        
        <x-form.select col="3" label="Contato Principal" id="type">
            <option value="Main">Principal</option>
            <option value="Internal" selected>Interno</option>
        </x-form.select>
        
    @endslot

    @slot('table')

        @include('admin.company.establishments.contact.partials.establishmentContact_table')
        
    @endslot

</x-pages.forms>