<?php

namespace App\Http\Controllers\Admin\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyOrganizationalStoreRequest;
use App\Http\Requests\CompanyOrganizationalUpdateRequest;
use App\Models\Company\CompanyOrganizational;
use App\Models\Company\CompanyOrganizationLinkedUsers;
use App\Models\User;
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
        //Log do Sistema
        Logger::access();        

        return redirect(route('organizational.organize'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Listando Dados
        $dbSector = CompanyOrganizational::select()->orderBy('order')->get();

        //Log do Sistema
        Logger::create();

        return view('admin.company.organizational.organizational_create', compact('dbSector'));
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
        CompanyOrganizational::create($data);

        //Log do Sistema
        Logger::store($data['title']);

        return redirect(route('organizational.organize'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Listando Dados
        $db = CompanyOrganizational::find($id);
        $dbUsers = User::all();
        $dbLinkedUsers = CompanyOrganizationLinkedUsers::where('organizational_id',$id)->get();

        //Log do Sistema
        Logger::show($db->title);

        return view('admin.company.organizational.organizational_show', compact('db','dbUsers','dbLinkedUsers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Listando Dados
        $db = CompanyOrganizational::find($id);
        $dbSector = CompanyOrganizational::select()->orderBy('order')->get();

        //Log do Sistema
        Logger::edit($db->title);

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
        $db = CompanyOrganizational::find($id);

        //Dados do Formulário
        $data = $request->all();
        $data['filter'] = strtolower($request['title']);

        //Salvando Dados
        $db->update($data);

        //Log do Sistema
        Logger::update($db->title);

        return redirect(route('organizational.organize'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Listando Dados
        $db = CompanyOrganizational::find($id);
        $dbCount = CompanyOrganizational::where('hierarchy',$id)->count();

        //Verificação
        if ($dbCount == 0) {
            $db->delete();

            //Log do Sistema
            Logger::destroy($db->title);

            return redirect(route('organizational.index'))
                ->with('success','Exclusão realizada com sucesso.');
        }else {
            $db = CompanyOrganizational::find($id);

            //Log do Sistema
            Logger::error();

            return redirect(route('organizational.index'))
                ->with('error','Existe setores vinculados a '.$db->title);
        }
    }

    /**
     * Update the hierarchy of the specified item in the store.
     */
    public function organize()
    {
        //Reordenando Setores
            //Buscando dados Setores
                $organizational = CompanyOrganizational::select()->orderBy('hierarchy')->get();

            foreach ($organizational as $sectorValue) {

                //Atribuindo Hierariquia do Setor Principal
                if ($sectorValue['hierarchy'] == 0) {
                    $orderList = CompanyOrganizational::find($sectorValue['id']);
                    $orderList->order = "0" . $sectorValue['acronym'];
                    $orderList->number_hierarchy = 1;
                    $orderList->save();
                }

                //Listando Setores para Ordenação Hierarquica
                    //Buscando Dados do Predecessor (Acima do setor)
                    $predecessor = CompanyOrganizational::select()->where('id', $sectorValue['hierarchy'])->get();

                foreach ($predecessor as $valuepredecessor) {
                    //Buscando dados
                    $orderList = CompanyOrganizational::find($sectorValue['id']);

                    //Atribuindo Novo Valor
                    $number_hierarchy = $valuepredecessor['order'] . $sectorValue['id'] . $sectorValue['acronym'];

                    //Salvando
                    $orderList->order = $number_hierarchy;
                    $orderList->number_hierarchy = preg_match_all('!\d+!',$number_hierarchy);
                    $orderList->save();
                }
            }
            
            //Listando Setores
            $db = CompanyOrganizational::select()->orderBy('order')->get();

            return view('admin.company.organizational.organizational_index', compact('db'));
    }

    /**
     * Update the status of the specified item in storage.
     */
    public function status(Request $request, string $id)
    {
        //Listando Dados
        $db = CompanyOrganizational::find($id);

        //Dados encaminhado pelo Formulário
        $data = $request->all();

        //Salvando Dados
        $db->update($data);

        //Log do Sistema
        Logger::status($db->id, $db->status);

        return redirect(route('organizational.organize'));
    }
}
