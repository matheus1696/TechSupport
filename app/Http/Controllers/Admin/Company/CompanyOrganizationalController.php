<?php

namespace App\Http\Controllers\Admin\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyOrganizationalStoreRequest;
use App\Http\Requests\CompanyOrganizationalUpdateRequest;
use App\Models\Company\CompanyOrganizationalModel;
use App\Services\Logger;

class CompanyOrganizationalController extends Controller
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
        //Informações da Página
        $header = [
            'title' => 'Organograma',
            'route' => route('organizational.create'),
        ];

        //Listando Dados
        $db = CompanyOrganizationalModel::select()->orderBy('ord_setor')->get();

        //Log do Sistema
        Logger::access($header['title']);

        return view('admin.company.organizational.organizational_index', [
            'header' => $header,
            'db' => $db,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Header
        $header = [
            'title' => 'Cadastrar Departamento',
        ];

        //Listando Dados
        $db = CompanyOrganizationalModel::select()->orderBy('ord_setor')->get();

        //Log do Sistema
        Logger::create($header['title']);

        return view('admin.company.organizational.organizational_create', [
            'header' => $header,
            'db' => $db,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompanyOrganizationalStoreRequest $request)
    {
        //Dados do Formulário
        $data = $request->all();
        $data['ft_setor'] = strtolower($request['no_setor']);

        //Salvando Dados
        CompanyOrganizationalModel::create($data);

        //Log do Sistema
        Logger::store($data['no_setor']);

        return redirect(route('organizational.organize'));
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
            'title' => 'Alterar Cadastro do Departamento',
        ];

        //Listando Dados
        $db = CompanyOrganizationalModel::find($id);
        $dbSector = CompanyOrganizationalModel::select()->orderBy('ord_setor')->get();

        //Log do Sistema
        Logger::edit($db->no_setor);

        return view('admin.company.organizational.organizational_edit', [
            'header' => $header,
            'dbSector' => $dbSector,
            'db' => $db,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompanyOrganizationalUpdateRequest $request, string $id)
    {
        //Listando Dados
        $db = CompanyOrganizationalModel::find($id);

        //Dados do Formulário
        $data = $request->all();
        $data['ft_setor'] = strtolower($request['no_setor']);

        //Salvando Dados
        $db->update($data);
        $db->save();

        //Log do Sistema
        Logger::update($db->no_setor);

        return redirect(route('organizational.organize'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Listando Dados
        $db = CompanyOrganizationalModel::find($id);
        $dbCount = CompanyOrganizationalModel::where('hie_setor',$id)->count();

        //Verificação
        if ($dbCount == 0) {
            $db->delete();

            //Log do Sistema
            Logger::destroy($db->no_setor);

            return redirect(route('organizational.index'))
                ->with('success','Exclusão realizada com sucesso.');
        }else {
            $db = CompanyOrganizationalModel::find($id);

            //Log do Sistema
            Logger::error('Exclusão não realizada, existe setores vinculados a '.$db->no_setor);

            return redirect(route('organizational.index'))
                ->with('errors','Existe setores vinculados a '.$db->no_setor);
        }
    }

    /**
     * Update the hierarchy of the specified item in the store.
     */
    public function organize()
    {
        //Reordenando Setores
            //Listando Setores
                $db = CompanyOrganizationalModel::select()->orderBy('hie_setor')->get();

            foreach ($db as $sectorValue) {

                //Atribuindo Hierariquia Principal
                if ($sectorValue['hie_setor'] == 0) {
                    $db = CompanyOrganizationalModel::find($sectorValue['id']);
                    $db->ord_setor = "0" . $sectorValue['sg_setor'];
                    $db->save();
                }

                //Listando Setores para Ordenação Hierarquica
                    $antecessor = CompanyOrganizationalModel::select()->where('id', $sectorValue['hie_setor'])->get();

                foreach ($antecessor as $valueantecessor) {
                    $db = CompanyOrganizationalModel::find($sectorValue['id']);
                    $db->ord_setor = $valueantecessor['ord_setor'] . $sectorValue['id'] . $sectorValue['sg_setor'];
                    $db->save();
                }
            }

            return redirect(route('organizational.index'));
    }

    /**
     * Update the status of the specified item in storage.
     */
    public function status(Request $request, string $id)
    {
        //Listando Dados
        $db = CompanyOrganizationalModel::find($id);

        //Dados encaminhado pelo Formulário
        $data = $request->all();

        //Salvando Dados
        $db->update($data);
        $db->save();

        //Log do Sistema
        Logger::status($db->no_setor,$data['st_setor']);

        return redirect(route('organizational.organize'));
    }
}
