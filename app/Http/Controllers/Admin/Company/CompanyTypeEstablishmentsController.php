<?php

namespace App\Http\Controllers\Admin\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompanyEstablishmentsModel;
use App\Models\CompanyTypeEstablishmentsModel;
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
        //Header
        $header = [
            'title'=>'Tipo de Estabelecimento',
            'route'=>route('type_establishments.create'),
        ];

        //Listagem de Dados
        $db = CompanyTypeEstablishmentsModel::select()
            ->orderBy('st_tipo_estabelecimento','DESC')
            ->orderBy('no_tipo_estabelecimento')
            ->paginate(20);
        $dbEstablishments = CompanyEstablishmentsModel::select()
            ->orderBy('no_unidade')
            ->get();

        //Log do Sistema
        Logger::access($header['title']);

        return view('admin.company.type_establishments.type_establishments_index',[
            'header'=>$header,
            'db'=>$db,
            'dbEstablishments'=>$dbEstablishments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Header
        $header = [
            'title'=>'Cadastrar Tipo de Estabelecimento',
        ];

        //Log do Sistema
        Logger::create($header['title']);

        return view('admin.company.type_establishments.type_establishments_create',[
            'header'=>$header,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Dados do Formulário
        $data = $request->all();

        //Salvando Dados
        CompanyTypeEstablishmentsModel::create($data);

        //Log do Sistema
        Logger::store($data['no_tipo_estabelecimento']);

        return redirect(route('type_establishments.index'))
            ->with('success','Cadastro realizado com sucesso');
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
            'title'=>'Alterar Cadastro do Tipo de Estabelecimento',
        ];

        $db = CompanyTypeEstablishmentsModel::find($id);

        //Log do Sistema
        Logger::edit($db->no_tipo_estabelecimento);

        return view('admin.company.type_establishments.type_establishments_edit',[
            'header'=>$header,
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
        $db->save();

        //Log do Sistema
        Logger::update($db->no_tipo_estabelecimento);

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
        $dbEstablishments = CompanyEstablishmentsModel::where('tipo_estabelecimento_id',$id)->count();

        if ($dbEstablishments == 0) {
            $db->delete();

            //Log do Sistema
            Logger::destroy($db->no_tipo_estabelecimento);

            return redirect(route('type_establishments.index'))
                ->with('success','Exclusão realizada com sucesso.');
        }else {
            //Log do Sistema
            Logger::error('Exclusão não realizada, existe unidades cadastradas neste tipo de estabelecimento '.$db->no_tipo_estabelecimento);

            return redirect(route('type_establishments.index'))
                ->with('errors','Existe unidades cadastradas neste tipo de estabelecimento.');
        }
    }
}
