<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory\InventoryMedication;
use App\Http\Requests\Inventory\StoreInventoryMedicationRequest;
use App\Http\Requests\Inventory\UpdateInventoryMedicationRequest;
use App\Models\Company\CompanyEstablishmentDepartment;
use App\Models\Medication\Medication;
use App\Services\Logger;
use Illuminate\Http\Request;

class InventoryMedicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //Listagem de Dados
        $db = CompanyEstablishmentDepartment::where('has_inventory_medication',TRUE)
        ->orderBy('department')
        ->paginate(20);

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchName'])) {
            $db = CompanyEstablishmentDepartment::where('filter','LIKE','%'.strtolower($search['searchName']).'%')
                ->orderBy('department')
                ->paginate(20);
        }

        //Log do Sistema
        Logger::access();

        return view('inventory.inventory_medication.inventory_medication_index',[
            'search'=>$search,
            'db'=>$db,
        ]);
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
    public function store(StoreInventoryMedicationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $db = CompanyEstablishmentDepartment::find($id);
        $dbMedications = Medication::all();
        $dbInventories = InventoryMedication::where('establishment_department_id', $id)->get();

        //Log do Sistema
        Logger::show($db->title);

        return view('inventory.inventory_medication.inventory_medication_show',[
            'db'=>$db,
            'dbMedications'=>$dbMedications,
            'dbInventories'=>$dbInventories,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InventoryMedication $InventoryMedication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryMedicationRequest $request, InventoryMedication $InventoryMedication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryMedication $InventoryMedication)
    {
        //
    }
}
