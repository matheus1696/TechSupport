<?php

namespace App\Http\Controllers\Admin\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User\UserSexualOrientationsModel;
use App\Services\Logger;

class UserSexualOrientationsController extends Controller
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
    public function index()
    {
        //Listando Dados
        $db = UserSexualOrientationsModel::select()
            ->orderBy('status','desc')
            ->orderBy('sexual_orientation')
            ->get();

        //Log do Sistema
        Logger::access();

        return view('admin.users.sexualOrientations.sexualOrientation_index',[
            'db'=>$db,
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
        //Dados do Formulário
        $data = $request->all();

        //Salvando Dados
        $db = UserSexualOrientationsModel::find($id);
        $db->update($data);

        //Log do Sistema
        Logger::update();

        return redirect(route('sexualorientations.index'))
            ->with('success','Atualização realizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
