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
        //Listando Dados
        $db = CompanyOrganizationalModel::select()->orderBy('order')->get();

        //Log do Sistema
        Logger::access();

        return view('admin.company.organizational.organizational_index',[
            'db' => $db,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Listando Dados
        $db = CompanyOrganizationalModel::select()->orderBy('order')->get();

        //Log do Sistema
        Logger::create();

        return view('admin.company.organizational.organizational_create', [
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
        $data['filter'] = strtolower($request['title']);

        //Salvando Dados
        CompanyOrganizationalModel::create($data);

        //Log do Sistema
        Logger::store();

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
        //Listando Dados
        $db = CompanyOrganizationalModel::find($id);
        $dbSector = CompanyOrganizationalModel::select()->orderBy('order')->get();

        //Log do Sistema
        Logger::edit();

        return view('admin.company.organizational.organizational_edit', [
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
        $data['filter'] = strtolower($request['title']);

        //Salvando Dados
        $db->update($data);

        //Log do Sistema
        Logger::update();

        return redirect(route('organizational.organize'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Listando Dados
        $db = CompanyOrganizationalModel::find($id);
        $dbCount = CompanyOrganizationalModel::where('hierarchy',$id)->count();

        //Verificação
        if ($dbCount == 0) {
            $db->delete();

            //Log do Sistema
            Logger::destroy();

            return redirect(route('organizational.index'))
                ->with('success','Exclusão realizada com sucesso.');
        }else {
            $db = CompanyOrganizationalModel::find($id);

            //Log do Sistema
            Logger::error();

            return redirect(route('organizational.index'))
                ->with('errors','Existe setores vinculados a '.$db->title);
        }
    }

    /**
     * Update the hierarchy of the specified item in the store.
     */
    public function organize()
    {
        //Reordenando Setores
            //Listando Setores
                $db = CompanyOrganizationalModel::select()->orderBy('hierarchy')->get();

            foreach ($db as $sectorValue) {

                //Atribuindo Hierariquia Principal
                if ($sectorValue['hierarchy'] == 0) {
                    $db = CompanyOrganizationalModel::find($sectorValue['id']);
                    $db->order = "0" . $sectorValue['acronym'];
                    $db->save();
                }

                //Listando Setores para Ordenação Hierarquica
                    $predecessor = CompanyOrganizationalModel::select()->where('id', $sectorValue['hierarchy'])->get();

                foreach ($predecessor as $valuepredecessor) {
                    $db = CompanyOrganizationalModel::find($sectorValue['id']);
                    $db->order = $valuepredecessor['order'] . $sectorValue['id'] . $sectorValue['acronym'];
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

        //Log do Sistema
        Logger::status($db->id, $db->status);

        return redirect(route('organizational.organize'));
    }
}
