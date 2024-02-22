<?php

namespace App\Http\Controllers\Admin\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\FinancialBlocksStoreRequest;
use App\Http\Requests\FinancialBlocksUpdateRequest;
use App\Models\Company\CompanyFinancialBlocksModel;
use App\Services\Logger;

class CompanyFinancialBlocksController extends Controller
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
        $db = CompanyFinancialBlocksModel::select()
            ->orderBy('title')
            ->paginate(20);

        //Log do Sistema
        Logger::access();

        return view('admin.company.financial_blocks.financial_blocks_index',[
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

        return view('admin.company.financial_blocks.financial_blocks_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FinancialBlocksStoreRequest $request)
    {
        //Dados do formulário
        $data = $request->all();

        //Salvando Dados
        CompanyFinancialBlocksModel::create($data);

        //Log do Sistema
        Logger::store($data['title']);

        return redirect(route('financial_blocks.index'))
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
        $db = CompanyFinancialBlocksModel::find($id);

        //Log do Sistema
        Logger::edit($db->title);

        return view('admin.company.financial_blocks.financial_blocks_edit',[
            'db'=>$db,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FinancialBlocksUpdateRequest $request, string $id)
    {
        //Dados do formulário
        $data = $request->all();

        //Atualizando dados
        $db = CompanyFinancialBlocksModel::find($id);
        $db->update($data);

        //Log do Sistema
        Logger::update($db->title);

        return redirect(route('financial_blocks.index'))
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
