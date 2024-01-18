<?php

namespace App\Http\Controllers\Users\Profile;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use App\Models\User\UserSexualOrientationsModel;
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
        //Informações da Página
        $header = [
            'title'=>'Perfil do Usuário'
        ];

        //Listando Dados
        $dbUser = User::find($id);
        $dbUserSexualOrientations = UserSexualOrientationsModel::where('status',true)->get();

        if ($dbUser && $dbUser->id === Auth::user()->id) {
            //Log do Sistema
            Logger::edit($header['title'].' '.$dbUser->name);

            return view('users.profile.profile_index',[
                'header'=>$header,
                'dbUser'=>$dbUser,
                'dbUserSexualOrientations'=>$dbUserSexualOrientations,
            ]);
        } else {
            //Log do Sistema
            Logger::error('Usuário informado não existe');

            return redirect(route('home'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, string $id)
    {
        //Listando Usuário
        $dbUser = User::find($id);

        //Alterando Dados do Usuário
        $data = $request->all();
        $dbUser->update($data);
        $dbUser->save();

        //Alterando Senha
        if ($request['password']) {
            $dbUser->password = Hash::make($request['password']);
            $dbUser->save();

            //Log do Sistema
            Logger::updateProfilePassword('Atualização de Senha do Usuário '.$dbUser->name);
        }

        //Log do Sistema
        Logger::updateProfileData('Atualização dos Dados do Perfil do Usuário '.$dbUser->name);

        return redirect(route('profile.edit',['profile'=>$id]))
            ->with('success','Alteração dos dados realizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Listando Usuário
        $dbUser = User::find($id);

        //Excluindo Usuário
        if ($dbUser) {
            $dbUser->delete();

            //Log do Sistema
            Logger::updateProfileDestroy($dbUser->name);

            Auth::logout();
            return redirect(route('login'));
        } else {
            //Log do Sistema
            Logger::error('Usuário informado não existe');

            return redirect(route('home'));
        };
    }
}
