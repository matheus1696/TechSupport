<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory\InventoryPharmacy;
use App\Http\Requests\Inventory\StoreInventoryPharmacyRequest;
use App\Http\Requests\Inventory\UpdateInventoryPharmacyRequest;
use App\Models\Company\CompanyEstablishmentDepartment;
use App\Models\Medication\Medication;
use App\Services\Logger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryPharmacyController extends Controller
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
        $db = CompanyEstablishmentDepartment::where('has_inventory_pharmacy',TRUE)
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

        return view('inventory.inventory_pharmacy.inventory_pharmacy_index',[
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
    public function store(StoreInventoryPharmacyRequest $request)
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
            $dbInventories = InventoryPharmacy::where('establishment_department_id', $id)->get();

            //Log do Sistema
            Logger::show($db->title);

            return view('inventory.inventory_pharmacy.inventory_pharmacy_show',[
                'db'=>$db,
                'dbMedications'=>$dbMedications,
                'dbInventories'=>$dbInventories,
            ]);
        }

        //Log do Sistema
        Logger::error('Usuário sem permissão de acessar esse estoque');

        return redirect()->route('inventory_pharmacies.index')->with('error','Usuário sem permissão de acessar esse estoque');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InventoryPharmacy $InventoryPharmacy)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryPharmacyRequest $request, InventoryPharmacy $InventoryPharmacy)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryPharmacy $InventoryPharmacy)
    {
        //
        return redirect()->route('login');
    }
}
