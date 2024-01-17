<?php

namespace App\Services;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SystemLogsModel;

#Code Logger
    ##Acessos = 1000
        #index = Acesso a listagem de dados = 1100
        #show = Acesso detalhado ao dado = 1101
        #create = Formulário de criação = 1200
        #edit = Formulário de edição = 1300
    ##Ações = 2000
        #store = Criação de dados = 2100
        #update Edição de dados = 2200
        #destroy = Exclusão de dados = 2300
        #status = Alteração de Status = 2400
    ##Informações/Histórico = 3000
        #link = Vincular Cadastro = 3100
    ##Logs Especificos - 7000 a 8999
        ##Usuários
            #updateProfileData = Alteração no Perfil do Usuário = 8901
            #updateProfilePassword = Alteração na Senha do Usuário = 8902
            #updateProfileDestroy = Exclusão do Usuário = 8903
            #updateUserPermission = Alteração nas Permissões do Usuário = 8904
            #updateUserVerify = Verificação da conta do Usuário = 8904
    ##Erros
        #error = Erros de Acesso = 9000


class Logger
{
    private static function Logs($code, $message) {
        SystemLogsModel::create([
            'log_code'=>$code,
            'log_ip'=>$_SERVER["REMOTE_ADDR"],
            'log_url'=>Request::url(),
            'log_method'=>Request::method(),
            'log_mensagem'=>$message,
            'user_id'=>Auth::user()->id,
            'user_name'=>Auth::user()->name,
        ]);
    }

    public static function access($header){
        self::Logs(1100,"Acesso a listagem de dados: ". $header);
    }

    public static function show($data){
        self::Logs(1101,"Acesso detalhado ao dado: ". $data);
    }

    public static function create($header){
        self::Logs(1200,"Formulário de criação ". $header);
    }

    public static function edit($data){
        self::Logs(1300,"Formulário de edição: ".$data);
    }

    public static function store($data){
        self::Logs(2100,"Cadastro de informação: ".$data);
    }

    public static function update($data){
        self::Logs(2200,"Alteração de cadastro: ".$data);
    }

    public static function destroy($data){
        self::Logs(2300,"Exclusão de dados: ".$data);
    }

    public static function status($data, $status){
        self::Logs(2400,"Alteração de status: ".$data." para ". $status);
    }

    public static function link($message){
        self::Logs(3100,"Vinculando dado: ".$message);
    }

    //Update Profile

    public static function updateProfileData($dataProfile){
        self::Logs(8991,"Edição do perfil do usuário: ".$dataProfile);
    }

    public static function updateProfilePassword($dataProfile){
        self::Logs(8992,"Alteração do perfil do usuário: ".$dataProfile);
    }

    public static function updateProfileDestroy($dataProfile){
        self::Logs(8993,"Exclusão do usuário: ".$dataProfile);
    }

    //Update Admin User

    public static function updateUserPermission($dataUser){
        self::Logs(8994,"Alterando permissão do usuário: ".$dataUser);
    }

    public static function updateUserVerify($dataUser){
        self::Logs(8995,"Encaminhado verificação de conta do usuário: ".$dataUser);
    }

    public static function error($message){
        self::Logs(9000,"Erro: ".$message);
    }
}
