<!-- Inicio de Componentização do Conteiner -->
<x-conteiner>
    <h3 class="mb-3 text-lg font-semibold text-center">Dados do Pessoais</h3>

    <form method="POST" action="{{route('profile.update',['profile'=>$db->id])}}">
        @csrf @method('PUT')
        
        <div class="grid items-center justify-center grid-cols-12 gap-3">
            
            <x-form.input col="12" label="Nome Completo" id="name" value="{{$db->name}}" required="required" placeholder="Fulano da Pereira da Silva Dómino"/>

            <x-form.input col="6" label="Data Nascimento" type="date" id="birthday" value="{{$db->birthday}}" max="{{date('Y-m-d')}}" min="{{date('1900-01-01')}}"/>

            <x-form.select col="6" label="Sexo" id="sex_id">
                @foreach ($dbUserSex as $UserSex)
                <option value="{{$UserSex->id}}" @if ($db->sex_id ==
                    $UserSex->id) selected @endif>{{$UserSex->sex}}
                </option>
                @endforeach
            </x-form.select>

            <x-form.input col="6" label="CPF" id="cpf" value="{{$db->cpf}}" maxlength="14" minlength="14" placeholder="000.000.000-00"/>                
            
            <x-form.input col="6" label="Matricula" id="registration" value="{{$db->registration}}" maxlength="8" minlength="8" placeholder="99.999-2"/>

            <x-form.select col="12" label="Estabelecimento" id="establishment_id">
                @foreach ($dbEstablishments as $establishment)
                    <option value="{{$establishment->id}}" @if ($db->establishment_id ==
                        $establishment->id) selected @endif>{{$establishment->title}}
                    </option>
                @endforeach
            </x-form.select>

            <x-form.input col="12" label="Cargo" id="disabled" value="{{$db->CompanyOccupation->title ?? ''}}" disabled="disabled" />
            
            <x-form.input col="6" label="Contato 1" type="tel" id="contact_1" value="{{$db->contact_1}}" maxlength="15" minlength="13" placeholder="(00) 00000-0000"/>
                
            <x-form.input col="6" label="Contato 2" type="tel" id="contact_2" value="{{$db->contact_2}}" maxlength="15" minlength="13" placeholder="(00) 00000-0000"/>
                
        </div>

        <!-- Inicio de Componentização dos Botões -->
        <x-button.buttonGroup>
            <x-button.buttonSubmit action="edit" col="12" />
        </x-button.buttonGroup>
    </form>
</x-conteiner>