<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\StoreInventoryPharmacyHistoryRequest;
use App\Models\Inventory\InventoryPharmacy;
use App\Http\Requests\Inventory\StoreInventoryPharmacyRequest;
use App\Http\Requests\Inventory\UpdateInventoryPharmacyRequest;
use App\Models\Company\CompanyEstablishmentDepartment;
use App\Models\Inventory\InventoryPharmacyHistory;
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

    /**
     * Display the specified resource.
     */
    public function entryCreate(string $id)
    {
        //
        $db = CompanyEstablishmentDepartment::find($id);

        if ($db->establishment_id == Auth::user()->establishment_id) {
            $dbMedications = Medication::all();
            $dbInventories = InventoryPharmacy::where('establishment_department_id', $id)->get();

            //Log do Sistema
            Logger::show($db->title);

            return view('inventory.inventory_pharmacy.inventory_pharmacy_entry',[
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
     * Store a newly created resource in storage.
     */
    public function entryStore(StoreInventoryPharmacyHistoryRequest $request)
    {
        //
        $data = $request->all();
        $data['code'] = "SMS".time();
        $data['movement'] = "Entrada";
        $data['user_id'] = Auth::user()->id;

        InventoryPharmacyHistory::create($data);

        $db = InventoryPharmacy::where('medication_id',$data['medication_id'])
            ->where('establishment_department_id',$data['establishment_department_id'])
            ->first();

        if ($db == NULL) {
            $db = InventoryPharmacy::create([
                'quantity'=>0,
                'establishment_id'=>$data['establishment_id'],
                'establishment_department_id'=>$data['establishment_department_id'],
                'medication_id'=>$data['medication_id'],
            ]);
        }
        
        // Atualizar a quantidade no inventário com base no movimento
        $db->quantity += $data['quantity'];
        $db->save();

        return redirect()->route('inventory_pharmacies.show',['inventory_pharmacy' => $data['establishment_department_id']])
            ->with('success', 'Histórico de inventário criado com sucesso.');
    }
}
