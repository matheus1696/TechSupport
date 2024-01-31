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
        $dbLists = CompanyEstablishmentContactsModel::where('estabelecimento_id',$id)
            ->orderBy('contact_1')
            ->orderBy('contact_2')
            ->get();
        $dbEstablishments = CompanyEstablishmentsModel::find($id);

        //Log do Sistema
        Logger::create();

        return view('admin.company.establishments.contact.establishmentContact_create',[
            'dbLists'=>$dbLists,
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
        Logger::store('Lista Telefônica '.$data['dp_unidade']);

        return redirect(route('establishments.contact.index',['establishment'=>$data['estabelecimento_id']]))
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
        $dbLists = CompanyEstablishmentContactsModel::where('estabelecimento_id',$establishments)
            ->orderBy('con_unidade')
            ->orderBy('con_unidade_2')
            ->get();
        $dbEstablishments = CompanyEstablishmentsModel::find($establishments);

        //Header
        $header = [
            'title'=>"Lista Telefônica " . $dbEstablishments->no_unidade,
        ];

        //Log do Sistema
        Logger::create($header['title']);

        return view('admin.company.establishments.contact.establishmentContact_edit',[
            'header'=>$header,
            'db'=>$db,
            'dbLists'=>$dbLists,
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
        $db->save();

        //Log do Sistema
        Logger::update($db->no_unidade);

        return redirect(route('establishments.contact.index',['establishment'=>$data['estabelecimento_id']]))
            ->with('success','Cadastro salvo com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Listando Dados
        $db = CompanyEstablishmentContactsModel::find($id);
        $dbEstablishments = $db->estabelecimento_id;

        //Verificação
        if ($db != NULL) {
            $db->delete();

            //Log do Sistema
            Logger::destroy("Contato".$db->dp_unidade);

            return redirect(route('establishments.contact.index',['establishment'=>$dbEstablishments]))
                ->with('success','Exclusão realizada com sucesso.');
        }else {
            //Log do Sistema
            Logger::error('Exclusão não realizada, existe setores vinculados a '.$db->no_unidade);

            return redirect(route('establishments.contact.index',['establishment'=>$dbEstablishments]))
                ->with('errors','Existe setores vinculados a '.$db->no_unidade);
        }
    }
}
