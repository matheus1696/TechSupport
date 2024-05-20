<?php

namespace App\Http\Controllers\Admin\Supply;

use App\Http\Controllers\Controller;
use App\Models\Supply\Supply;
use App\Http\Requests\Supply\StoreSupplyRequest;
use App\Http\Requests\Supply\UpdateSupplyRequest;
use App\Models\Supply\SupplyClassification;
use App\Models\Supply\SupplyType;
use App\Models\Supply\SupplyUnit;
use App\Services\Logger;
use Illuminate\Http\Request;

class SupplyController extends Controller
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
        $db = Supply::select()->orderBy('status','DESC')->orderBy('title')->paginate(20);

        //Log do Sistema
        Logger::access();

        return view('admin.supply.supply.supply_index',compact('db'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $dbSupplyUnits = SupplyUnit::all();
        $dbSupplyTypes = SupplyType::all();
        $dbSupplyClassifications = SupplyClassification::all();

        //Log do Sistema
        Logger::create();

        return view('admin.supply.supply.supply_create', compact('dbSupplyUnits','dbSupplyTypes', 'dbSupplyClassifications'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSupplyRequest $request)
    {
        $data = $request->all();
        $data['filter'] = StrtoLower($data['title']);

        Supply::create($data);

        //Log do Sistema
        Logger::store($data['title']);

        return redirect(route('supplys.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Supply $Supply)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Listagem de Dados
        $db = Supply::find($id);        
        $dbSupplyUnits = SupplyUnit::all();
        $dbSupplyTypes = SupplyType::all();
        $dbSupplyClassifications = SupplyClassification::all();

        //Log do Sistema
        Logger::edit($db->title);

        return view('admin.supply.supply.supply_edit',compact('db','dbSupplyUnits','dbSupplyTypes','dbSupplyClassifications'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSupplyRequest $request, string $id)
    {
        //Dados do Formulário
        $data = $request->all();
        $data['filter'] = StrtoLower($data['title']);

        //Listagem de Dados
        $db = Supply::find($id);
        $db->update($data);

        //Log do Sistema
        Logger::update($db->title);

        return redirect(route('supplys.index'))
            ->with('success','Alteração realizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supply $Supply)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Update the status of the specified item in storage.
     */
    public function status(Request $request, string $id)
    {
        //Dados dos Formulários
        $data = $request->only('status');

        //Salvando Dados
        $db = Supply::find($id);
        $db->update($data);

        //Log do Sistema
        Logger::status($db->id, $db->status);

        return redirect(route('supplys.index'))->with('success','Status alterado com sucesso.');
    }
}
