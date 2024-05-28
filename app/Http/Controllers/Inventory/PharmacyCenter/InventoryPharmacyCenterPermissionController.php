<?php

namespace App\Http\Controllers\Inventory\PharmacyCenter;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\PharmacyCenter\StoreInventoryPharmacyCenterPermissionRequest;
use App\Models\Company\CompanyEstablishmentDepartment;
use App\Models\Inventory\InventoryPharmacyCenterPermission;
use App\Models\User;
use App\Services\Logger;

class InventoryPharmacyCenterPermissionController extends Controller
{
    /*
     * Controller access permission resource.
     */
    public function __construct()
    {
        $this->middleware(['permission:sysadmin|admin|inventory_pharmacy_center_permission']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $route = 'pharmacy_center_permission';

        //Listando Dados
        $title = 'Central de Abastecimento Farmacêutico';
        $db = CompanyEstablishmentDepartment::where('has_inventory_pharmacy_center',TRUE)->get();
        $dbUsers = User::select()->orderBy('name')->get();

        //Log do Sistema
        Logger::access();

        return view('inventory.inventory_permission.inventory_permission_index', compact('title','route','db','dbUsers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){ return redirect()->route('login'); }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInventoryPharmacyCenterPermissionRequest $request)
    {
        $data = $request->all();

        $validadeInventoryPermission = InventoryPharmacyCenterPermission::where('user_id',$data['user_id'])
            ->where('establishment_department_id',$data['establishment_department_id'])
            ->first();

        if ($validadeInventoryPermission) {
            return redirect()->back()->with('error','Usuário com vinculação existente ao estoque');
        }
            
        InventoryPharmacyCenterPermission::create($data);

        return redirect()->back()->with('success','Usuário vinculado ao ao estoque');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $route = 'pharmacy_center_permission';

        //Listando Dados
        $db = CompanyEstablishmentDepartment::find($id);

        if ($db->has_inventory_pharmacy_center) {
            $dbUsers = User::select()->orderBy('name')->get();
            $dbLinkedUsers = InventoryPharmacyCenterPermission::where('establishment_department_id',$id)->get();

            //Log do Sistema
            Logger::show($db->title);

            return view('inventory.inventory_permission.inventory_permission_show', compact('route','db','dbUsers','dbLinkedUsers'));
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
        $dbUsers = InventoryPharmacyCenterPermission::find($id);

        if ($dbUsers) {
            $dbUsers->delete();

            return redirect()->back()->with('success','Usuário desvinculado com sucesso');
        }

        return redirect()->route('home')->with('error','Permissão inexistente');
    }
}
