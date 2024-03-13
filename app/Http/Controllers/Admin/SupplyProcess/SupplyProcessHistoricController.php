<?php

namespace App\Http\Controllers\Admin\SupplyProcess;

use App\Http\Controllers\Controller;
use App\Http\Requests\SupplyProcess\SupplyProcessHistoricStoreRequest;
use App\Http\Requests\SupplyProcess\SupplyProcessHistoricUpdateRequest;
use App\Models\SupplyProcess\SupplyProcessHistoric;

class SupplyProcessHistoricController extends Controller
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
    public function store(SupplyProcessHistoricStoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SupplyProcessHistoric $supplyProcessHistoric)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SupplyProcessHistoric $supplyProcessHistoric)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SupplyProcessHistoricUpdateRequest $request, SupplyProcessHistoric $supplyProcessHistoric)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SupplyProcessHistoric $supplyProcessHistoric)
    {
        //
    }
}
