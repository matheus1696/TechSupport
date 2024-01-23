<!-- Inicio de Componentização do Conteiner -->
<x-conteiner>
    <h3 class="mb-3 text-center">Dados do Pessoais</h3>

    <form method="POST" action="{{route('profile.update',['profile'=>$dbUser->id])}}">
        @csrf @method('PUT')
        <div class="form-row justify-content-center">
            <!-- Inicio de Componentização de Input e Select -->
            <x-form.input col="12" label="Nome Completo" id="name" value="{{$dbUser->name}}" required="required" />

            <x-form.input col="6" label="Data Nascimento" type="date" id="birthday" value="{{$dbUser->birthday}}"
                max="{{date('Y-m-d')}}" min="{{date('1900-01-01')}}"/>

            <x-form.select col="6" label="Sexo" id="sexual_orientation_id">
                @foreach ($dbUserSexualOrientations as $dbUserSexualOrientation)
                <option value="{{$dbUserSexualOrientation->id}}" @if ($dbUser->sexual_orientation_id ==
                    $dbUserSexualOrientation->id) selected @endif>{{$dbUserSexualOrientation->sexual_orientation}}
                </option>
                @endforeach
            </x-form.select>

            <x-form.input col="12" label="Departamento" id="disabled"
                value="{{$dbUser->CompanyOrganizational->acronym ?? ''}} - {{$dbUser->CompanyOrganizational->title ?? ''}}"
                disabled="disabled" />

            <x-form.input col="12" label="Cargo" id="disabled" value="{{$dbUser->CompanyOccupations->occupation ?? ''}}"
                disabled="disabled" />
            <x-form.input col="12" label="Estabelecimento" id="disabled"
                value="{{$dbUser->CompanyEstablishments->establishment ?? ''}}" disabled="disabled" />

            <x-form.input col="6" label="Contato 1" type="tel" id="contact_1" value="{{$dbUser->contact_1}}"
                maxlength="15" minlength="13" />
            <x-form.input col="6" label="Contato 2" type="tel" id="contact_2" value="{{$dbUser->contact_2}}"
                maxlength="15" minlength="13" />

        </div>

        <!-- Inicio de Componentização dos Botões -->
        <x-button.buttonGroup>
            <x-button.buttonSubmit action="edit" col="12" />
        </x-button.buttonGroup>
    </form>
</x-conteiner>