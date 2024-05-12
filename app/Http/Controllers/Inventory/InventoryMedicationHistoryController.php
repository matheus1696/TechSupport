<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory\InventoryMedicationHistory;
use App\Http\Requests\Inventory\StoreInventoryMedicationHistoryRequest;
use App\Http\Requests\Inventory\UpdateInventoryMedicationHistoryRequest;
use App\Models\Inventory\InventoryMedication;
use Illuminate\Support\Facades\Auth;

class InventoryMedicationHistoryController extends Controller
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
    public function store(StoreInventoryMedicationHistoryRequest $request)
    {
        //
        $data = $request->all();
        $data['code'] = time();
        $data['user_id'] = Auth::user()->id;

        InventoryMedicationHistory::create($data);

        $db = InventoryMedication::where('medication_id',$data['medication_id'])
            ->where('establishment_department_id',$data['establishment_department_id'])
            ->first();

        if ($db == NULL) {
            $db = InventoryMedication::create([
                'quantity'=>0,
                'establishment_id'=>$data['establishment_id'],
                'establishment_department_id'=>$data['establishment_department_id'],
                'medication_id'=>$data['medication_id'],
            ]);
        }
        
        // Atualizar a quantidade no inventário com base no movimento
        if ($data['movement'] === "Entrada") {
            $db->quantity += $data['quantity'];
        } elseif ($data['movement'] === "Saída") {
            $db->quantity -= $data['quantity'];
        }

        $db->save();

        return redirect()->route('inventory_medications.show',['inventory_medication' => $data['establishment_department_id']])
            ->with('success', 'Histórico de inventário criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(InventoryMedicationHistory $InventoryMedicationHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InventoryMedicationHistory $InventoryMedicationHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryMedicationHistoryRequest $request, InventoryMedicationHistory $InventoryMedicationHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryMedicationHistory $InventoryMedicationHistory)
    {
        //
    }
}
