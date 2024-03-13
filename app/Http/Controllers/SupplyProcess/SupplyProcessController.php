<?php

namespace App\Http\Controllers\SupplyProcess;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SupplyProcess\SupplyProcessStoreRequest;
use App\Http\Requests\SupplyProcess\SupplyProcessUpdateRequest;
use App\Models\Company\CompanyOrganization;
use App\Models\SupplyProcess\SupplyProcesses;
use App\Models\SupplyProcess\SupplyProcessItems;
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
        $db = SupplyProcesses::select()->orderBy('due_date', 'DESC')->paginate(20);
        $dbSupplyProcessItems = SupplyProcessItems::all();

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchCod']) || isset($search['searchName'])) {
            $db = SupplyProcesses::where('code_process','LIKE','%'.strtolower($search['searchCod']).'%')
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
        $dbOrganizational = CompanyOrganization::where('linked_users', '>', 0)->get();
        $dbUsers = User::all();

        //Logs
        Logger::create();

        return view('supply_process.supply_process.supply_process_create', compact('dbUsers','dbOrganizational'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SupplyProcessStoreRequest $request)
    {
        //Dados dos Formulários
        $data = $request->all();
        $data['filter'] = StrtoLower($data['title']);
        $data['user_id'] = Auth::user()->id;

        $dbSupplyProcessStatus = SupplyProcessStatus::where('default', TRUE)->first();
        $data['status_id'] = $dbSupplyProcessStatus->id;

        //Salvando Dados
        SupplyProcesses::create($data);

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
        $db = SupplyProcesses::find($id);
        $dbSupplyProcessItems = SupplyProcessItems::where('process_id', $id)->paginate(20);

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
        $db = SupplyProcesses::find($id);

        //Logs
        Logger::edit($db->title);

        return view('supply_process.supply_process.supply_process_edit',[
            'db'=>$db,
        ]);
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
        $db = SupplyProcesses::find($id);
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
        $db = SupplyProcesses::find($id);
        $db->update($data);

        //Logs
        Logger::status($db->id, $db->status);

        return redirect(route('supply_processes.index'))
            ->with('success','Status alterado com sucesso.');
    }
}
