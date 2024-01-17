<?php

namespace App\Http\Controllers\Admin\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompanyEstablishmentsModel;
use App\Models\CompanyOccupationsModel;
use App\Models\CompanyOrganizationalModel;
use App\Models\User;
use App\Models\UserHasPermissionsModel;
use App\Models\UserPermissionsModel;
use App\Services\Logger;

class UsersController extends Controller
{
    /*
     * Controller access permission resource.
     */
    public function __construct()
    {
        $this->middleware(['permission:sysadmin']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //Informações da Página
        $header = [
            'title'=>'Lista de Usuários',
        ];

        //Listando Dados
        $db = User::orderBy('name')->get();
        $dbPermissions= UserPermissionsModel::all();
        $dbHasPermissions = UserHasPermissionsModel::all();
        $dbCompanyOrganizational = CompanyOrganizationalModel::where('st_setor',true)->orderBy('ord_setor')->get();
        $dbCompanyOccupations = CompanyOccupationsModel::where('st_cbo',true)->orderBy('cod_cbo')->get();
        $dbEstablishments = CompanyEstablishmentsModel::where('st_unidade',true)->orderBy('no_unidade')->get();

        //Pesquisar Dados
        $search=$request->all();
        if (isset($search['searchName']) || isset($search['searchEmail'])) {
            $db = User::where('name','LIKE','%'.$search['searchName'].'%')
                ->where('email','LIKE','%'.$search['searchEmail'].'%')
                ->orderBy('name')
                ->paginate(20);

                //Log do Sistema
                Logger::access($header['title']. ' com filtros aplicados.'. $search['searchName']);
        }

        //Log do Sistema
        Logger::access($header['title']);

        return view('admin.users.users_index',[
            'header'=>$header,
            'search'=>$search,
            'db'=>$db,
            'dbPermissions'=>$dbPermissions,
            'dbHasPermissions'=>$dbHasPermissions,
            'dbCompanyOrganizational'=>$dbCompanyOrganizational,
            'dbCompanyOccupations'=>$dbCompanyOccupations,
            'dbEstablishments'=>$dbEstablishments,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Listando Dados Usuário
        $db = User::find($id);

        //Alterando Dados do Usuário
        $data = $request->only('setor_id','cargo_id','unidade_id');
        $db->update($data);
        $db->save();

        //Log do Sistema
        Logger::updateProfileData('Atualização dos Dados do Perfil do Usuário '.$db->name);

        //Alterando Permissão do Usuário
            //Listando Permissões
            $dbPermissions = UserPermissionsModel::all();

            //Sicronizando Permissões (Exclusão de Permissões Cadastradas)
            UserHasPermissionsModel::where('model_id', $id)->delete();

            //Atribundo FALSE nas permissões vazias encaminhadas pelo POST (Input Checked)
            foreach ($dbPermissions as $Permission) {
                if (empty($request[$Permission->name])) {
                    $request[$Permission->name] = false;
                };
            }

            //Atribuindo a permissão com TRUE em USER
            $userPermission = UserPermissionsModel::select()->where('name','user')->first();
            $request['user'] = $userPermission->id;

            //Realizando a atualização das permissões
            foreach ($dbPermissions as $Permission) {
                if ($request[$Permission->name]) {
                    $data = new UserHasPermissionsModel;
                    $data->permission_id = $request[$Permission->name];
                    $data->model_id = $id;
                    $data->save();

                    //Log do Sistema
                    Logger::updateUserPermission($db->email.' para acesso a '.$Permission->name);
                }
            }

        return(redirect(route('users.index'))
            ->with('success',`Permissão do Usuário Alteradas`));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }

    public function verify(string $id)
    {
        //Solicitando Verificação de Conta
        $db = User::find($id);
        $db->email_verified_at = NULL;
        $db->save();

        //Log do Sistema
        Logger::updateUserVerify($db->name);

        return redirect(route('users.index'))
            ->with('success',`Usuário $db->name deve realizar verificação no próximo acesso.`);
    }
}
