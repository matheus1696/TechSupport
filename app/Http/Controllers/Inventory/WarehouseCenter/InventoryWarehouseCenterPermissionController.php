<?php

namespace App\Http\Controllers\Inventory\WarehouseCenter;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\WarehouseCenter\StoreInventoryWarehouseCenterPermissionRequest;
use App\Models\Company\CompanyEstablishmentDepartment;
use App\Models\Inventory\InventoryWarehouseCenterPermission;
use App\Models\User;
use App\Services\Logger;

class InventoryWarehouseCenterPermissionController extends Controller
{
    /*
     * Controller access permission resource.
     */
    public function __construct()
    {
        $this->middleware(['permission:sysadmin|admin|inventory_warehouse_center_permission']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Listando Dados
        $title = 'Centro de Distribuições';
        $db = CompanyEstablishmentDepartment::where('has_inventory_warehouse_center',TRUE)->get();
        $dbUsers = User::select()->orderBy('name')->get();

        //Log do Sistema
        Logger::access();

        return view('inventory.inventory_permission.inventory_permission_index', compact('title','db','dbUsers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){ return redirect()->route('login'); }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInventoryWarehouseCenterPermissionRequest $request)
    {
        $data = $request->all();

        $validadeInventoryPermission = InventoryWarehouseCenterPermission::where('user_id',$data['user_id'])
            ->where('establishment_department_id',$data['establishment_department_id'])
            ->first();

        if ($validadeInventoryPermission) {
            return redirect()->back()->with('error','Usuário com vinculação existente ao estoque');
        }
            
        InventoryWarehouseCenterPermission::create($data);

        return redirect()->back()->with('success','Usuário vinculado ao ao estoque');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Listando Dados
        $db = CompanyEstablishmentDepartment::find($id);

        if ($db->has_inventory_warehouse_center) {
            $dbUsers = User::select()->orderBy('name')->get();
            $dbLinkedUsers = InventoryWarehouseCenterPermission::where('establishment_department_id',$id)->get();

            //Log do Sistema
            Logger::show($db->title);

            return view('inventory.inventory_permission.inventory_permission_show', compact('db','dbUsers','dbLinkedUsers'));
        }        

        return redirect()->route('home')->with('error','Departamento sem liberação para o estoque da farmácia');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(){ return redirect()->route('login'); }

    /**
     * Update the specified resource in storage.
     */
    public function update(){ return redirect()->route('login'); }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dbUsers = InventoryWarehouseCenterPermission::find($id);

        if ($dbUsers) {
            $dbUsers->delete();

            return redirect()->back()->with('success','Usuário desvinculado com sucesso');
        }

        return redirect()->route('home')->with('error','Permissão inexistente');
    }
}