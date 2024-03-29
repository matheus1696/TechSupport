<?php

namespace App\Http\Controllers\Users\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company\CompanyEstablishment;
use App\Models\Company\CompanyOccupation;
use App\Models\Company\CompanyOrganization;
use App\Models\User;
use App\Models\User\UserHasPermissions;
use App\Models\User\UserPermissions;
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
        //Listando Dados
        $db = User::orderBy('name')->with('SexualOrientation')->paginate(20);
        $dbPermissions= UserPermissions::all();
        $dbHasPermissions = UserHasPermissions::all();
        $dbCompanyOrganizational = CompanyOrganization::where('status',true)->orderBy('order')->get();
        $dbCompanyOccupations = CompanyOccupation::where('status',true)->orderBy('title')->get();
        $dbEstablishments = CompanyEstablishment::where('status',true)->orderBy('title')->get();

        //Pesquisar Dados
        $search = $request->all();

        if (isset($search['searchName']) && isset($search['searchEmail'])) {
            $db = User::where('filter','LIKE','%'.$search['searchName'].'%')
                ->orWhere('email','LIKE','%'.$search['searchEmail'].'%')
                ->orderBy('name')
                ->with('SexualOrientations')
                ->paginate(20);
        } elseif (isset($search['searchName']) || isset($search['searchEmail'])) {
            $db = User::where('filter','LIKE','%'.$search['searchName'].'%')
                ->where('email','LIKE','%'.$search['searchEmail'].'%')
                ->orderBy('name')
                ->with('SexualOrientations')
                ->paginate(20);
        }       

        //Log do Sistema
        Logger::access();

        return view('admin.users.users_index',[
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
        //
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
        //
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
        $data = $request->only('company_id','occupation_id','establishment_id');
        $db->update($data);

        //Log do Sistema
        Logger::updateUserProfileData($db->name);

        //Alterando Permissão do Usuário
            //Listando Permissões
            $dbPermissions = UserPermissions::all();

            //Sicronizando Permissões (Exclusão de Permissões Cadastradas)
            UserHasPermissions::where('model_id', $id)->delete();

            //Atribundo FALSE nas permissões vazias encaminhadas pelo POST (Input Checked)
            foreach ($dbPermissions as $Permission) {
                if (empty($request[$Permission->name])) {
                    $request[$Permission->name] = false;
                };
            }

            //Atribuindo a permissão com TRUE em USER
            $userPermission = UserPermissions::select()->where('name','user')->first();
            $request['user'] = $userPermission->id;

            //Realizando a atualização das permissões
            foreach ($dbPermissions as $Permission) {
                if ($request[$Permission->name]) {
                    $data = new UserHasPermissions;
                    $data->permission_id = $request[$Permission->name];
                    $data->model_id = $id;
                    $data->save();

                    //Log do Sistema
                    Logger::updateUserPermission($db->name);
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
        //
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
            ->with('success','Atualização realizada com sucesso.');
    }
}
