<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory\InventoryWarehouseEntries;
use App\Http\Requests\Inventory\StoreInventoryWarehouseEntriesRequest;
use App\Http\Requests\Inventory\UpdateInventoryWarehouseEntriesRequest;
use App\Models\Inventory\InventoryWarehouse;
use App\Services\Logger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryWarehouseEntriesController extends Controller
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
    public function store(StoreInventoryWarehouseEntriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InventoryWarehouseEntries $inventoryWarehouseEntries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryWarehouseEntriesRequest $request, InventoryWarehouseEntries $inventoryWarehouseEntries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryWarehouseEntries $inventoryWarehouseEntries)
    {
        //
    }
}
