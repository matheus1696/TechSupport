<!-- Inicio de Componentização da Tabela -->
<x-table.table :db="$db">

    <!-- Inicio Slot THead -->
    @slot('thead')
    <tr>
        <th>Nome</th>
        <th class="d-none d-md-table-cell">E-mail</th>
        <th class="col-1">Verificação</th>
        <th style="width: 100px"></th>
    </tr>
    @endslot

    <!-- Inicio Slot TBody -->
    @slot('tbody')
        @foreach ($db as $item)
            @if ($item->id != 1)
                @if (Auth::User()->id != $item->id)
                <tr>
                    <td>{{$item->name}}</td>
                    <td class="d-none d-md-table-cell">{{$item->email}}</td>
                    <td class="text-center">
                        <span class="badge badge-{{$item->email_verified_at ? 'success' : 'warning' }}">
                            {{$item->email_verified_at ? "Verificado" : "Aguardando"}}
                        </span>
                    </td>

                    <td class="text-center">
                        <!-- Inicio de Componentização do ModalShow -->
                        <x-button.minButtonModalEdit id="UserModal{{$item->id}}" title="Dados do Perfil">
                            <div class="row">
                                <p class="col-lg-4"><strong>Nome: </strong>{{$item->name}}</p>
                                <p class="col-lg-4"><strong>Email: </strong>{{$item->email}}</p>
                                <p class="col-lg-4"><strong>Data de Nascimento: </strong>@if($item->birthday)
                                    {{date('d/m/Y',strtotime($item->birthday))}} @endif</p>
                                <p class="col-lg-4"><strong>Contato: </strong>{{$item->contact_1}}</p>
                                <p class="col-lg-4"><strong>Contato: </strong>{{$item->contact_2}}</p>
                                <p class="col-lg-4"><strong>Sexo: </strong>{{$item->SexualOrientations->sex ?? ""}}</p>

                                <div class="px-2 col-12">
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

                                <div class="col-md-6">
                                    <a href="{{route('users.verify',['user'=>$item->id])}}"
                                        class="my-2 btn btn-block bg-secondary elevation-2">Solicitar Verificação de
                                        Conta</a>
                                </div>

                                <form action="{{route('password.email')}}" method="post" class="col-md-6">
                                    @csrf
                                    {{-- Email field --}}
                                    <div class="input-group"><input type="email" name="email" value="{{$item->email}}"
                                            hidden></div>

                                    {{-- Send reset link button --}}
                                    <button type="submit" class="my-2 btn btn-block bg-warning elevation-2">Enviar
                                        Recuperação de Senha</button>
                                </form>
                                
                            </x-button.buttonGroup>
                        </x-button.minButtonModalEdit>

                        <!-- Inicio de Componentização do Modal Permissões -->
                        <x-modal.modalUserPermission id="UserPermissionModal{{$item->id}}" title="Permissões">
                            <form action="{{route('users.update',['user'=>$item->id])}}" method="post">
                                @csrf @method('PUT')
                                <div class="p-3">
                                    @foreach ($dbPermissions as $permission)
                                    <div class="form-check form-check-inline">
                                        <label class="label-checkbox" for="{{$permission->id}}">
                                            <input class="input-checkbox" type="checkbox" id="{{$permission->id}}"
                                                name={{$permission->name}} value="{{$permission->id}}"
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
                        </x-modal.modalUserPermission>
                    </td>
                </tr>
                @endif
            @endif
        @endforeach
    @endslot

</x-table.table>