<?php

namespace App\Http\Controllers\SupplyProcess;

use App\Http\Controllers\Controller;
use App\Models\SupplyProcess\SupplyProcessOrganization;
use App\Http\Requests\SupplyProcess\SupplyProcessOrganizationStoreRequest;
use App\Http\Requests\SupplyProcess\SupplyProcessOrganizationUpdateRequest;

class SupplyProcessOrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(SupplyProcessOrganizationStoreRequest $request)
    {
        //
        $data = $request->all();

        SupplyProcessOrganization::create($data);

        return redirect()->back()->with('success','Setor cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(SupplyProcessOrganization $supplyProcessOrganization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SupplyProcessOrganization $supplyProcessOrganization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SupplyProcessOrganizationUpdateRequest $request, SupplyProcessOrganization $supplyProcessOrganization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SupplyProcessOrganization $supplyProcessOrganization, string $id)
    {
        $db = $supplyProcessOrganization->find($id);
        $db->delete();

        return redirect()->back()->with('success','Setor excluido com sucesso');
    }
}
