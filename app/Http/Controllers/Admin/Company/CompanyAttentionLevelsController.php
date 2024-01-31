<?php

namespace App\Http\Controllers\Admin\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company\CompanyAttentionLevelsModel;
use App\Services\Logger;

class CompanyAttentionLevelsController extends Controller
{
    /*
     * Controller access permission resource.
     */
    public function __construct()
    {
        $this->middleware(['permission:sysadmin|admin']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Listagem de Dados
        $db = CompanyAttentionLevelsModel::select()
            ->orderBy('title')
            ->paginate(20);

        //Log do Sistema
        Logger::access();

        return view('admin.company.attentions.attentions_index',[
            'db'=>$db,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Log do Sistema
        Logger::create();

        return view('admin.company.attentions.attentions_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Dados do formulário
        $data = $request->all();

        //Salvando Dados
        CompanyAttentionLevelsModel::create($data);

        //Log do Sistema
        Logger::store();

        return redirect(route('attentions.index'))
            ->with('success','Cadastro salvo com sucesso');
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
        $db = CompanyAttentionLevelsModel::find($id);

        //Log do Sistema
        Logger::edit();

        return view('admin.company.attentions.attentions_edit',[
            'db'=>$db,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Dados do formulário
        $data = $request->all();

        //Atualizando dados
        $db = CompanyAttentionLevelsModel::find($id);
        $db->update($data);

        //Log do Sistema
        Logger::update();

        return redirect(route('attentions.index'))
            ->with('success','Cadastro alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
