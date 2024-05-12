<?php

namespace App\Http\Controllers\Admin\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company\CompanyEstablishmentDepartment;
use App\Services\Logger;

class CompanyEstablishmentDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
        CompanyEstablishmentDepartment::create($data);

        //Log do Sistema
        Logger::store($data['department']);

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
        $db = CompanyEstablishmentDepartment::find($id);

        //Verificação de Existência 
        if ($db) {
            Logger::edit($db->title);
            return view('admin.company.establishments.contact.establishmentContact_edit', compact('db'));
        }else {
            Logger::error();
            return redirect()->back()->with('error','Estabelecimento não existe');
        }        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Dados dos Formulários
        $data = $request->all();

        //Salvando Dados
        $db = CompanyEstablishmentDepartment::find($id);

        //Verificação
        if ($db) {            
            $db->update($data);

            //Log do Sistema
            Logger::update($data['title']);

            return redirect(route('establishments.show',['establishment'=>$db['establishment_id']]))
                ->with('success','Cadastro salvo com sucesso');
        }else {
            //Log do Sistema
            Logger::error();

            return redirect()->back()->with('error','Estabelecimento não existe');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Listando Dados
        $db = CompanyEstablishmentDepartment::find($id);
        $dbEstablishments = $db->establishment_id;

        //Verificação
        if ($db) {
            $db->delete();

            //Log do Sistema
            Logger::destroy($db->title);

            return redirect(route('establishments.show',['establishment'=>$dbEstablishments]))
                ->with('success','Exclusão realizada com sucesso.');
        }else {
            //Log do Sistema
            Logger::error();

            return redirect(route('establishments.show',['establishment'=>$dbEstablishments]))
                ->with('errors','Existe setores vinculados a '.$db->title);
        }
    }

    public function hasInventory(Request $request, string $id)
    {
        //Dados dos Formulários
        $data = $request->only('has_inventory_product','has_inventory_medication','has_inventory_central');

        //Salvando Dados
        $db = CompanyEstablishmentDepartment::find($id);
        $db->update($data);

        //Log do Sistema
        Logger::status($db->id, $db->status);

        return redirect(route('establishments.show',['establishment'=>$db->establishment_id]))->with('success','Estoque alterado com sucesso.');
    }
}
