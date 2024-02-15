<?php

namespace App\Http\Controllers\Users\Profile;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Company\CompanyEstablishmentsModel;
use App\Models\User;
use App\Models\User\UserSexModel;
use App\Services\Logger;

class ProfileController extends Controller
{
    /*
     * Controller access permission resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Redirecionando para Perfil
        if (Auth::user()) {
            return redirect(route('profile.edit',[Auth::user()->id]));
        }

        return redirect(route('login'));
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
        //Listando Dados
        $db = User::find($id);
        $dbUserSex = UserSexModel::where('status',true)->get();
        $dbEstablishments = CompanyEstablishmentsModel::all();

        if ($db && $db->id === Auth::user()->id) {
            //Log do Sistema
            Logger::editUserProfile($db->name);

            return view('users.profile.profile_index',[
                'db'=>$db,
                'dbUserSex'=>$dbUserSex,
                'dbEstablishments'=>$dbEstablishments,
            ]);
        } else {
            //Log do Sistema
            Logger::errorUserNoExistent('Usuário informado não existe');

            return redirect(route('home'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, string $id)
    {
        //Listando Usuário
        $db = User::find($id);

        if ($db && $db->id === Auth::user()->id) {
            //Alterando Dados do Usuário
            $data = $request->all();
            $db->update($data);

            //Alterando Senha
            if ($request['password']) {
                $db->password = Hash::make($request['password']);
                $db->save();

                //Log do Sistema
                Logger::updateUserProfilePassword($db->name);
            }

            //Log do Sistema
            Logger::updateUserProfileData($db->name);

            return redirect(route('profile.edit',['profile'=>$id]))
                ->with('success','Alteração dos dados realizada com sucesso.');

        } else {
            //Log do Sistema
            Logger::errorUserDiferentDestroy();

            return redirect(route('home'));
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Listando Usuário
        $db = User::find($id);

        //Excluindo Usuário
        if ($db && $db->id === Auth::user()->id) {
            $db->delete();

            //Log do Sistema
            Logger::updateProfileDestroy($db->name);

            Auth::logout();
            return redirect(route('login'));
        } else {
            //Log do Sistema
            Logger::errorUserDiferentDestroy();

            return redirect(route('home'));
        };
    }
}
