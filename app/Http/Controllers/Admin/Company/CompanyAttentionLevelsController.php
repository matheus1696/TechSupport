<?php

namespace App\Http\Controllers\Admin\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompanyAttentionLevelsModel;
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
        //Header
        $header = [
            'title'=>"Níveis de Atenção/Blocos",
            'route'=>route('attentions.create'),
        ];

        //Listagem de Dados
        $db = CompanyAttentionLevelsModel::select()
            ->orderBy('no_nivel_atencao')
            ->get();

        //Log do Sistema
        Logger::access($header['title']);

        return view('admin.company.attentions.attentions_index',[
            'header'=>$header,
            'db'=>$db,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Header
        $header = [
            'title'=>'Cadastro de Níveis de Atenção/Blocos',
        ];

        //Log do Sistema
        Logger::create($header['title']);

        return view('admin.company.attentions.attentions_create',[
            'header'=>$header,
        ]);
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
        Logger::store($data['no_nivel_atencao']);

        return redirect(route('attentions.index'))->with('success','Cadastro salvo com sucesso');
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
        //Header
        $header = [
            'title'=>'Alterando Níveis de Atenção/Blocos',
        ];

        //Listando Dados
        $db = CompanyAttentionLevelsModel::find($id);

        //Log do Sistema
        Logger::edit($db->no_nivel_atencao);

        return view('admin.company.attentions.attentions_edit',[
            'header'=>$header,
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
        $db->save();

        //Log do Sistema
        Logger::update($db->no_nivel_atencao);

        return redirect(route('attentions.index'))->with('success','Cadastro alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
