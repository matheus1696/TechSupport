@extends('adminlte::page')

@section('title', $header['title'])

@section('content_header')
    <!-- Inicio de Componentização do Header -->
    <x-header title="{{$header['title']}}"/>
@stop

@section('content')
    <!-- Inicio de Componentização da Página Index -->
    <x-pages.index>
        @slot('body')

            <div class="row justify-content-center">

                <div class="col-md-8">
                    <!-- Inicio de Componentização do Conteiner -->
                    <x-conteiner>
                        <h3 class="text-center mb-3">Dados do Pessoais</h3>

                        <form method="POST" action="{{route('profile.update',['profile'=>$dbUser->id])}}">
                            @csrf @method('PUT')
                            <div class="form-row justify-content-center">
                                <!-- Inicio de Componentização de Input e Select -->
                                <x-form.input col="12" label="Nome Completo" id="name" value="{{$dbUser->name}}" required="required"/>
                                <x-form.input col="6" label="Data Nascimento" type="date" id="dn_usuario" value="{{$dbUser->dn_usuario}}" max="{{date('Y-m-d')}}"/>

                                <x-form.select col="6" label="Sexo" id="orientacao_sexual_id">
                                    @foreach ($dbUserSexualOrientations as $dbUserSexualOrientation)
                                        <option value="{{$dbUserSexualOrientation->id}}" @if ($dbUser->orientacao_sexual_id == $dbUserSexualOrientation->id) selected @endif>{{$dbUserSexualOrientation->no_orientacao_sexual}}</option>
                                    @endforeach
                                </x-form.select>

                                <x-form.input col="12" label="Departamento" id="disabled" value="{{$dbUser->CompanyOrganizational->sg_setor ?? ''}} - {{$dbUser->CompanyOrganizational->no_setor ?? ''}}" disabled="disabled"/>

                                <x-form.input col="12" label="Cargo" id="disabled" value="{{$dbUser->CompanyOccupations->no_cbo ?? ''}}" disabled="disabled"/>
                                <x-form.input col="12" label="Estabelecimento" id="disabled" value="{{$dbUser->CompanyEstablishments->no_unidade ?? ''}}" disabled="disabled"/>

                                <x-form.input col="6" label="Contato 1" type="tel" id="con_usuario_1" value="{{$dbUser->con_usuario_1}}" maxlength="15" minlength="13"/>
                                <x-form.input col="6" label="Contato 2" type="tel" id="con_usuario_2" value="{{$dbUser->con_usuario_2}}" maxlength="15" minlength="13"/>

                            </div>

                            <!-- Inicio de Componentização dos Botões -->
                            <x-button.buttonGroup>
                                <x-button.buttonSubmit action="edit" col="12"/>
                            </x-button.buttonGroup>
                        </form>
                    </x-conteiner>
                </div>

                <div class="col-md-8">
                    <!-- Inicio de Componentização do Conteiner -->
                    <x-conteiner>
                        <h3 class="text-center mb-3">Alteração de Senha</h3>

                        <form method="POST" action="{{route('profile.update',['profile'=>$dbUser->id])}}">
                            @csrf @method('PUT')

                            <div class="form-row justify-content-center">

                                <!-- Inicio de Componentização de Input e Select -->
                                <x-form.input col="12" label="Email" id="email" value="{{$dbUser->email}}" disabled="disabled"/>
                                <x-form.input col="6" label="Senha" type="password" id="password"/>
                                <x-form.input col="6" label="Confirmar Senha" type="password" id="password_confirmation"/>
                            </div>

                            <!-- Inicio de Componentização dos Botões -->
                            <x-button.buttonGroup>
                                <x-button.buttonSubmit action="edit" col="12"/>
                            </x-button.buttonGroup>
                        </form>
                    </x-conteiner>
                </div>

                <div class="row col-md-8">
                    <!-- Inicio de Componentização do Conteiner -->
                    <x-conteiner>
                        <h3 class="text-center">Excluir Perfil</h3>
                        <p class="text-justify">A exclusão do usuário acarretara na perca total dos históricos e permissões atribuidas, lembrando que infelizmente não temos como recuperar seu perfil caso queira continuar com está ação.</p>

                        <!-- Inicio de Componentização dos Botões -->
                        <x-button.buttonGroup>
                            <x-button.buttonDelete col="12" route="{{route('profile.destroy',['profile'=>$dbUser->id])}}"/>
                        </x-button.buttonGroup>
                    </x-conteiner>
                </div>

            </div>
        @endslot

    </x-pages.index>
@stop

<!-- Configuração do Select2 -->
@section('css')
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('.js-select').select2({
                theme: 'bootstrap-5'
            });
        });
    </script>
@endsection


