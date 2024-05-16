<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory\InventoryWarehouseExits;
use App\Http\Requests\Inventory\StoreInventoryWarehouseExitsRequest;
use App\Http\Requests\Inventory\UpdateInventoryWarehouseExitsRequest;

class InventoryWarehouseExitsController extends Controller
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
        //
        return redirect()->route('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return redirect()->route('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInventoryWarehouseExitsRequest $request)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(InventoryWarehouseExits $inventoryWarehouseExits)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InventoryWarehouseExits $inventoryWarehouseExits)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryWarehouseExitsRequest $request, InventoryWarehouseExits $inventoryWarehouseExits)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryWarehouseExits $inventoryWarehouseExits)
    {
        //
        return redirect()->route('login');
    }
}
