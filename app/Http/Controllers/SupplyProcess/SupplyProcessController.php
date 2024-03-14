<?php

namespace App\Http\Controllers\SupplyProcess;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SupplyProcess\SupplyProcessStoreRequest;
use App\Http\Requests\SupplyProcess\SupplyProcessUpdateRequest;
use App\Models\SupplyProcess\SupplyProcess;
use App\Models\SupplyProcess\SupplyProcessItem;
use App\Models\SupplyProcess\SupplyProcessStatus;
use App\Models\User;
use App\Services\Logger;
use Illuminate\Support\Facades\Auth;

class SupplyProcessController extends Controller
{
    /*
     * Controller access permission resource.
     */
    public function __construct()
    {
        $this->middleware(['permission:sysadmin|admin|supply']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $db = SupplyProcess::select()->orderBy('due_date', 'DESC')->paginate(20);
        $dbSupplyProcessItems = SupplyProcessItem::all();

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchCod']) || isset($search['searchName'])) {
            $db = SupplyProcess::where('code_process','LIKE','%'.strtolower($search['searchCod']).'%')
                ->where('filter','LIKE','%'.strtolower($search['searchName']).'%')
                ->orderBy('title')
                ->paginate(20);
        }

        //Logs
        Logger::access();

        return view('supply_process.supply_process.supply_process_index',[
            'search'=>$search,
            'db'=>$db,
            'dbSupplyProcessItems'=>$dbSupplyProcessItems,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dbUsers = User::where('registration', '!=',NULL)
            ->where('cpf', '!=',NULL)            
            ->where('organization_id', '!=',NULL)
            ->with('CompanyOrganization')
            ->get();

        //Logs
        Logger::create();

        return view('supply_process.supply_process.supply_process_create', compact('dbUsers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SupplyProcessStoreRequest $request)
    {
        //Dados dos Formulários
        $data = $request->all();

        //Dados do Usuário
        $dbDemantant = User::find($data['demantant_user_id']);
        $dbRequesting = User::find($data['requesting_user_id']);
        $dbInspectorHead = User::find($data['inspector_head_user_id']);
        $dbInspectorDeputy = User::find($data['inspector_deputy_user_id']);

        //Vinculando Demandante
        $data['demantant_name'] = $dbDemantant->name;
        $data['demantant_organization'] = $dbDemantant->CompanyOrganization->title;
        $data['demantant_registration'] = $dbDemantant->registration;
        $data['demantant_cpf'] = $dbDemantant->cpf;

        //Vinculando Solicitante
        $data['requesting_name'] = $dbRequesting->name;
        $data['requesting_organization'] = $dbRequesting->CompanyOrganization->title;
        $data['requesting_registration'] = $dbRequesting->registration;
        $data['requesting_cpf'] = $dbRequesting->cpf;

        //Vinculando Fiscal Titular
        $data['inspector_head_name'] = $dbInspectorHead->name;
        $data['inspector_head_organization'] = $dbInspectorHead->CompanyOrganization->title;
        $data['inspector_head_registration'] = $dbInspectorHead->registration;
        $data['inspector_head_cpf'] = $dbInspectorHead->cpf;

        //Vinculando Fiscal Sunplente
        $data['inspector_deputy_name'] = $dbInspectorDeputy->name;
        $data['inspector_deputy_organization'] = $dbInspectorDeputy->CompanyOrganization->title;
        $data['inspector_deputy_registration'] = $dbInspectorDeputy->registration;
        $data['inspector_deputy_cpf'] = $dbInspectorDeputy->cpf;

        //Vinculando Filtro e Usuário de realizou o cadastro                
        $data['organization_id'] = $dbRequesting->id;
        $data['filter'] = StrtoLower($data['title']);
        $data['user_id'] = Auth::user()->id;

        //Adicionando Status Padrão
        $dbSupplyProcessStatus = SupplyProcessStatus::where('default', TRUE)->first();
        $data['status_id'] = $dbSupplyProcessStatus->id;

        //Salvando Dados
        SupplyProcess::create($data);

        //Logs
        Logger::store($data['title']);

        return redirect(route('supply_processes.index'))
            ->with('success','Cadastro salvo com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Listagem de Dados
        $db = SupplyProcess::find($id);
        $dbSupplyProcessItems = SupplyProcessItem::where('process_id', $id)->paginate(20);

        //Logs
        Logger::show($db->title);

        return view('supply_process.supply_process.supply_process_show',[
            'db'=>$db,
            'dbSupplyProcessItems'=>$dbSupplyProcessItems,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Listagem de Dados
        $db = SupplyProcess::find($id);        
        $dbUsers = User::where('registration', '!=',NULL)
            ->where('cpf', '!=',NULL)            
            ->where('organization_id', '!=',NULL)
            ->with('CompanyOrganization')
            ->get();

        //Logs
        Logger::edit($db->title);

        return view('supply_process.supply_process.supply_process_edit', compact('db','dbUsers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SupplyProcessUpdateRequest $request, string $id)
    {
        //Dados dos Formulários
        $data = $request->all();
        $data['filter'] = StrtoLower($data['title']);
        $data['validity'] = floor((strtotime($data['due_date']) - strtotime($data['start_date'])) / (60 * 60 * 24 ) / 30);

        //Salvando Dados
        $db = SupplyProcess::find($id);
        $db->update($data);

        //Logs
        Logger::update($db->title);

        return redirect(route('supply_processes.show',['supply_process'=>$id]))
            ->with('success','Cadastro atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }

    /**
     * Update the status of the specified item in storage.
     */
    public function status(Request $request, string $id)
    {
        //Dados dos Formulários
        $data = $request->only('status');

        //Salvando Dados
        $db = SupplyProcess::find($id);
        $db->update($data);

        //Logs
        Logger::status($db->id, $db->status);

        return redirect(route('supply_processes.index'))
            ->with('success','Status alterado com sucesso.');
    }
}
