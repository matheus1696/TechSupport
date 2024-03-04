<!-- Inicio de Componentização da Tabela -->
<x-table.table :db="$db">

    <!-- Inicio Slot THead -->
    @slot('thead')
        <x-table.th class="w-1/3">Nome</x-table.th>
        <x-table.th class="w-1/3">E-mail</x-table.th>
        <x-table.th>Verificação</x-table.th>
        <x-table.th></x-table.th>
    @endslot

    <!-- Inicio Slot TBody -->
    @slot('tbody')
        @foreach ($db as $item)
            @if ($item->id != 1)
                @if (Auth::User()->id != $item->id)
                <x-table.tr>
                    <x-table.td>{{$item->name}}</x-table.td>
                    <x-table.td>{{$item->email}}</x-table.td>
                    <x-table.td>
                        <span class="badge badge-{{$item->email_verified_at ? 'success' : 'warning' }}">
                            {{$item->email_verified_at ? "Verificado" : "Aguardando"}}
                        </span>
                    </x-table.td>

                    <x-table.td>
                        <!-- Inicio de Componentização do ModalShow -->
                        <x-button.minButtonModalEdit id="UserModal{{$item->id}}" title="Dados do Perfil">
                            <div class="grid grid-cols-1 gap-3">
                                <p><strong>Nome: </strong>{{$item->name}}</p>
                                <p><strong>Email: </strong>{{$item->email}}</p>
                                <p><strong>Data de Nascimento: </strong>@if($item->birthday)
                                    {{date('d/m/Y',strtotime($item->birthday))}} @endif</p>
                                <p><strong>Contato: </strong>{{$item->contact_1}}</p>
                                <p><strong>Contato: </strong>{{$item->contact_2}}</p>
                                <p><strong>Sexo: </strong>{{$item->SexualOrientations->sex ?? ""}}</p>

                                <div>
                                    <!-- Inicio de Componentização de Formulário -->
                                    <x-form.form method="edit" route="{{route('users.update',['user'=>$item->id])}}">

                                        <!-- Inicio de Componentização de Select -->
                                        <x-form.select col="12" label="Setor" id="company_id" db="company_id{{$item}}">
                                            @foreach ($dbCompanyOrganizational as $dbCompanyOrganization)
                                            <option value="{{$dbCompanyOrganization->id}}" @if ($item->company_id ==
                                                $dbCompanyOrganization->id) selected @endif>
                                                @for ($i = 0; $i < preg_match_all('!\d+!',$dbCompanyOrganization->
                                                    ord_setor); $i++) <span>-</span> @endfor
                                                    {{$dbCompanyOrganization->acronym}} -
                                                    {{$dbCompanyOrganization->title}}
                                            </option>
                                            @endforeach
                                        </x-form.select>

                                        <!-- Inicio de Componentização de Select -->
                                        <x-form.select col="12" label="Cargo" id="occupation_id" db="occupation_id{{$item}}">
                                            @foreach ($dbCompanyOccupations as $dbCompanyOccupation)
                                            <option value="{{$dbCompanyOccupation->id}}" @if ($item->occupation_id ==
                                                $dbCompanyOccupation->id) selected @endif>{{$dbCompanyOccupation->code}}
                                                - {{$dbCompanyOccupation->title}}</option>
                                            @endforeach
                                        </x-form.select>

                                        <!-- Inicio de Componentização de Select -->
                                        <x-form.select col="12" label="Estabelecimento" id="establishment_id" :db="$item">
                                            @foreach ($dbEstablishments as $dbEstablishment)
                                            <option value="{{$dbEstablishment->id}}" @if ($item->establishment_id ==
                                                $dbEstablishment->id) selected @endif>{{$dbEstablishment->title}}
                                            </option>
                                            @endforeach
                                        </x-form.select>
                                    </x-form.form>
                                </div>
                            </div>

                            <!-- Inicio de Componentização dos Botões -->
                            <x-button.buttonGroup>
                                <a href="{{route('users.verify',['user'=>$item->id])}}" class="w-full">
                                    <div class="w-full py-2 text-sm text-center text-white transition duration-300 bg-gray-600 rounded-lg shadow-md hover:bg-gray-700">
                                        Solicitar Verificação de Conta
                                    </div>
                                </a>

                                <div class="w-full">
                                    <form action="{{route('password.email')}}" method="post">
                                        @csrf
                                        {{-- Email field --}}
                                        <div class="input-group"><input type="email" name="email" value="{{$item->email}}" hidden></div>
    
                                        {{-- Send reset link button --}}
                                        <button 
                                            type="submit"
                                            class="w-full py-2 text-sm text-white transition duration-300 bg-yellow-600 rounded-lg shadow-md hover:bg-yellow-700"
                                        >
                                            Enviar Recuperação de Senha
                                        </button>
                                    </form>
                                </div>
                                
                            </x-button.buttonGroup>
                        </x-button.minButtonModalEdit>

                        <!-- Inicio de Componentização do Modal Permissões -->
                        <x-button.minButtonModalUserPermission id="UserPermissionModal{{$item->id}}" title="Permissões">
                            <form action="{{route('users.update',['user'=>$item->id])}}" method="post">
                                @csrf @method('PUT')
                                <div class="p-3">
                                    @foreach ($dbPermissions as $permission)
                                        <div class="form-check form-check-inline">
                                            <label class="label-checkbox" for="{{$permission->id}}">
                                                <input class="input-checkbox" type="checkbox" id="{{$permission->id}}" name={{$permission->name}} value="{{$permission->id}}"
                                                    @foreach ($dbHasPermissions as $hasPermission)
                                                        @if ($hasPermission->permission_id == $permission->id)
                                                            @if ($item->id == $hasPermission->model_id)
                                                                checked
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                >
                                                <span class="input-checkbox-mark">{{$permission->name}}</span>
                                            </label>
                                        </div>
                                    @endforeach
                                </div>

                                <!-- Inicio de Componentização dos Botões -->
                                <x-button.buttonSubmit action="edit" col="12" />
                            </form>
                        </x-button.minButtonModalUserPermission>
                    </x-table.td>
                </x-table.tr>
                @endif
            @endif
        @endforeach
    @endslot

</x-table.table>