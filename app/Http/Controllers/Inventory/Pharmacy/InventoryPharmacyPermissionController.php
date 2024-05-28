<?php

namespace App\Http\Controllers\Inventory\Pharmacy;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\Pharmacy\StoreInventoryPharmacyPermissionRequest;
use App\Models\Company\CompanyEstablishmentDepartment;
use App\Models\Inventory\InventoryPharmacyPermission;
use App\Models\User;
use App\Services\Logger;

class InventoryPharmacyPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Listando Dados
        $title = 'Farmácias';
        $db = CompanyEstablishmentDepartment::where('has_inventory_pharmacy',TRUE)->get();
        $dbUsers = User::select()->orderBy('name')->get();

        //Log do Sistema
        Logger::access();

        return view('inventory.inventory_permission.inventory_permission_index', compact('title','db','dbUsers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInventoryPharmacyPermissionRequest $request)
    {
        $data = $request->all();
            
        InventoryPharmacyPermission::create($data);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Listando Dados
        $db = CompanyEstablishmentDepartment::find($id);
        $dbUsers = User::select()->orderBy('name')->get();
        $dbLinkedUsers = InventoryPharmacyPermission::where('establishment_department_id',$id)->get();

        //Log do Sistema
        Logger::show($db->title);

        return view('inventory.inventory_permission.inventory_permission_show', compact('db','dbUsers','dbLinkedUsers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InventoryPharmacyPermission $inventoryPharmacyPermission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dbUsers = InventoryPharmacyPermission::find($id);
        $dbUsers->delete();

        return redirect()->back()->with('success','Usuário desvinculado com sucesso');
    }
}
