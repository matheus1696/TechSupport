<?php

namespace App\Http\Controllers\Admin\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company\CompanyEstablishmentDepartmentsModel;
use App\Services\Logger;

class CompanyEstablishmentDepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        //
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
        //Dados dos Formulários
        $data = $request->all();
        $data['filter'] = strtolower($data['department']);

        //Salvando Dados
        CompanyEstablishmentDepartmentsModel::create($data);

        //Log do Sistema
        Logger::store();

        return redirect(route('establishments.show',['establishment'=>$data['establishment_id']]))
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
        $db = CompanyEstablishmentDepartmentsModel::find($id);

        //Log do Sistema
        Logger::create();

        return view('admin.company.establishments.contact.establishmentContact_edit',[
            'db'=>$db,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Dados dos Formulários
        $data = $request->all();

        //Salvando Dados
        $db = CompanyEstablishmentDepartmentsModel::find($id);
        $db->update($data);

        //Log do Sistema
        Logger::update();

        return redirect(route('establishments.show',['establishment'=>$db['establishment_id']]))
            ->with('success','Cadastro salvo com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Listando Dados
        $db = CompanyEstablishmentDepartmentsModel::find($id);
        $dbEstablishments = $db->establishment_id;

        //Verificação
        if ($db != NULL) {
            $db->delete();

            //Log do Sistema
            Logger::destroy();

            return redirect(route('establishments.show',['establishment'=>$dbEstablishments]))
                ->with('success','Exclusão realizada com sucesso.');
        }else {
            //Log do Sistema
            Logger::error();

            return redirect(route('establishments.show',['establishment'=>$dbEstablishments]))
                ->with('errors','Existe setores vinculados a '.$db->title);
        }
    }
}
