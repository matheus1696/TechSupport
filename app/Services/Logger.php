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

    public static function access(){
        self::Logs(1100,"Acesso a listagem de dados.");
    }

    public static function show(){
        self::Logs(1101,"Acesso detalhado ao dado.");
    }

    public static function create(){
        self::Logs(1200,"Formulário de criação.");
    }

    public static function edit(){
        self::Logs(1300,"Formulário de edição.");
    }

    public static function store(){
        self::Logs(2100,"Cadastro de informação.");
    }

    public static function update(){
        self::Logs(2200,"Alteração de cadastro.");
    }

    public static function destroy(){
        self::Logs(2300,"Exclusão de dados.");
    }

    public static function status(){
        self::Logs(2400,"Alteração de status.");
    }

    public static function link(){
        self::Logs(3100,"Vinculando dado.");
    }

    //Update Profile

    public static function updateProfileData(){
        self::Logs(8991,"Edição do perfil do usuário.");
    }

    public static function updateProfilePassword(){
        self::Logs(8992,"Alteração do perfil do usuário.");
    }

    public static function updateProfileDestroy(){
        self::Logs(8993,"Exclusão do usuário.");
    }

    //Update Admin User

    public static function updateUserPermission(){
        self::Logs(8994,"Alterando permissão do usuário.");
    }

    public static function updateUserVerify(){
        self::Logs(8995,"Encaminhado verificação de conta do usuário.");
    }

    public static function error(){
        self::Logs(9000,"Erro");
    }
}
