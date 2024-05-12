<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory\InventoryProductHistory;
use App\Http\Requests\Inventory\StoreInventoryProductHistoryRequest;
use App\Http\Requests\Inventory\UpdateInventoryProductHistoryRequest;
use App\Models\Inventory\InventoryProduct;
use Illuminate\Support\Facades\Auth;

class InventoryProductHistoryController extends Controller
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
    public function store(StoreInventoryProductHistoryRequest $request)
    {
        //
        $data = $request->all();
        $data['code'] = time();
        $data['user_id'] = Auth::user()->id;

        InventoryProductHistory::create($data);

        $db = InventoryProduct::where('product_id',$data['product_id'])
            ->where('establishment_department_id',$data['establishment_department_id'])
            ->first();

        if ($db == NULL) {
            $db = InventoryProduct::create([
                'quantity'=>0,
                'establishment_id'=>$data['establishment_id'],
                'establishment_department_id'=>$data['establishment_department_id'],
                'product_id'=>$data['product_id'],
            ]);
        }
        
        // Atualizar a quantidade no inventário com base no movimento
        if ($data['movement'] === "Entrada") {
            $db->quantity += $data['quantity'];
        } elseif ($data['movement'] === "Saída") {
            $db->quantity -= $data['quantity'];
        }

        $db->save();

        return redirect()->route('inventory_products.show',['inventory_product' => $data['establishment_department_id']])
            ->with('success', 'Histórico de inventário criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(InventoryProductHistory $inventoryProductHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InventoryProductHistory $inventoryProductHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryProductHistoryRequest $request, InventoryProductHistory $inventoryProductHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryProductHistory $inventoryProductHistory)
    {
        //
    }
}
