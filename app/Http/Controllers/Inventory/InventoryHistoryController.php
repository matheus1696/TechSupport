<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory\InventoryHistory;
use App\Http\Requests\StoreInventoryHistoryRequest;
use App\Http\Requests\UpdateInventoryHistoryRequest;
use App\Models\Inventory\Inventory;
use App\Services\Logger;
use Illuminate\Support\Facades\Auth;

class InventoryHistoryController extends Controller
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
    public function store(StoreInventoryHistoryRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

        InventoryHistory::create($data);

        $db = Inventory::where('consumable_id',$data['consumable_id'])
            ->where('establishment_id',$data['establishment_id'])
            ->first();

        if ($db == NULL) {
            $db = Inventory::create([
                'quantity'=>0,
                'establishment_id'=>$data['establishment_id'],
                'consumable_id'=>$data['consumable_id'],
            ]);            
        }
        
        // Atualizar a quantidade no inventário com base no movimento
        if ($data['movement'] === "Entrada") {
            $db->quantity += $data['quantity'];
        } elseif ($data['movement'] === "Saída") {
            $db->quantity -= $data['quantity'];
        }

        $db->save();

        return redirect()->route('inventories.show',['inventory' => $request->establishment_id])
            ->with('success', 'Histórico de inventário criado com sucesso.');;
    }

    /**
     * Display the specified resource.
     */
    public function show(InventoryHistory $inventoryHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InventoryHistory $inventoryHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryHistoryRequest $request, InventoryHistory $inventoryHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryHistory $inventoryHistory)
    {
        //
    }
}
