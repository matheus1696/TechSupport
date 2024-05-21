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
use Illuminate\Support\Facades\Auth;

class InventoryMedicationController extends Controller
{
    /*
     * Controller access permission resource.
     */
    public function __construct()
    {
        $this->middleware(['permission:sysadmin|admin|inventory_pharmacy']);
    }

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
        return redirect()->route('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInventoryMedicationRequest $request)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $db = CompanyEstablishmentDepartment::find($id);

        if ($db->establishment_id == Auth::user()->establishment_id) {
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

        //Log do Sistema
        Logger::error('Usuário sem permissão de acessar esse estoque');

        return redirect()->route('inventory_medications.index')->with('error','Usuário sem permissão de acessar esse estoque');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InventoryMedication $InventoryMedication)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryMedicationRequest $request, InventoryMedication $InventoryMedication)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryMedication $InventoryMedication)
    {
        //
        return redirect()->route('login');
    }
}
