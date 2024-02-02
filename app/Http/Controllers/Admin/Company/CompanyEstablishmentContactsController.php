<?php

namespace App\Http\Controllers\Admin\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company\CompanyEstablishmentsModel;
use App\Models\Company\CompanyEstablishmentContactsModel;
use App\Services\Logger;

class CompanyEstablishmentContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        $db = CompanyEstablishmentContactsModel::where('establishment_id',$id)->get();            
        $dbEstablishments = CompanyEstablishmentsModel::find($id);

        //Log do Sistema
        Logger::create();

        return view('admin.company.establishments.contact.establishmentContact_create',[
            'db'=>$db,
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
        //Dados dos Formulários
        $data = $request->all();

        //Salvando Dados
        CompanyEstablishmentContactsModel::create($data);

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
    public function edit(string $establishments, string $contact)
    {
        $db = CompanyEstablishmentContactsModel::find($contact);

        $dbEstablishments = CompanyEstablishmentsModel::find($establishments);

        //Log do Sistema
        Logger::create();

        return view('admin.company.establishments.contact.establishmentContact_edit',[
            'db'=>$db,
            'dbEstablishments'=>$dbEstablishments,
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
        $db = CompanyEstablishmentContactsModel::find($id);
        $db->update($data);

        //Log do Sistema
        Logger::update();

        return redirect(route('establishments.contact.index',['establishment'=>$data['establishment_id']]))
            ->with('success','Cadastro salvo com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Listando Dados
        $db = CompanyEstablishmentContactsModel::find($id);
        $dbEstablishments = $db->establishment_id;

        //Verificação
        if ($db != NULL) {
            $db->delete();

            //Log do Sistema
            Logger::destroy();

            return redirect(route('establishments.contact.index',['establishment'=>$dbEstablishments]))
                ->with('success','Exclusão realizada com sucesso.');
        }else {
            //Log do Sistema
            Logger::error();

            return redirect(route('establishments.contact.index',['establishment'=>$dbEstablishments]))
                ->with('errors','Existe setores vinculados a '.$db->title);
        }
    }
}
