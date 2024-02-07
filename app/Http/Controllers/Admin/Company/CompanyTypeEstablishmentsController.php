<?php

namespace App\Http\Controllers\Admin\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company\CompanyEstablishmentsModel;
use App\Models\Company\CompanyTypeEstablishmentsModel;
use App\Services\Logger;

class CompanyTypeEstablishmentsController extends Controller
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
        $db = CompanyTypeEstablishmentsModel::select()->orderBy('status','DESC')->orderBy('title')->paginate(20);
        $dbEstablishments = CompanyEstablishmentsModel::select()->orderBy('title')->get();

        //Log do Sistema
        Logger::access();

        return view('admin.company.type_establishments.type_establishments_index',[
            'db'=>$db,
            'dbEstablishments'=>$dbEstablishments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.company.type_establishments.type_establishments_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $db = $request->all();

        CompanyTypeEstablishmentsModel::create($db);

        return redirect(route('type_establishments.index'));
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
        $db = CompanyTypeEstablishmentsModel::find($id);

        //Log do Sistema
        Logger::edit();

        return view('admin.company.type_establishments.type_establishments_edit',[
            'db'=>$db,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Dados do Formulário
        $data = $request->all();

        //Salvando Dados
        $db = CompanyTypeEstablishmentsModel::find($id);
        $db->update($data);

        //Log do Sistema
        Logger::update($db->title);

        return redirect(route('type_establishments.index'))
            ->with('success','Alteração realizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Verificando Dados
        $db = CompanyTypeEstablishmentsModel::find($id);
        $dbEstablishments = CompanyEstablishmentsModel::where('type_establishment_id',$id)->count();

        if ($dbEstablishments == 0) {
            $db->delete();

            //Log do Sistema
            Logger::destroy();

            return redirect(route('type_establishments.index'))
                ->with('success','Exclusão realizada com sucesso.');
        }else {
            //Log do Sistema
            Logger::error();

            return redirect(route('type_establishments.index'))
                ->with('errors','Existe unidades cadastradas neste tipo de estabelecimento.');
        }
    }
}
