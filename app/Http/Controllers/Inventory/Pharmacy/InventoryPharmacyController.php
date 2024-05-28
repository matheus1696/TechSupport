<?php

namespace App\Http\Controllers\Inventory\Pharmacy;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\Pharmacy\StoreInventoryPharmacyHistoryRequest;
use App\Http\Requests\Inventory\Pharmacy\StoreInventoryPharmacyRequest;
use App\Http\Requests\Inventory\Pharmacy\UpdateInventoryPharmacyRequest;
use App\Models\Company\CompanyEstablishmentDepartment;
use App\Models\Inventory\InventoryPharmacy;
use App\Models\Inventory\InventoryPharmacyCenterHistory;
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

        if (isset($search['searchSector']) || isset($search['searchEstablishment'])) {
            
            if (isset($search['searchEstablishment']) == NULL) {
                $search['searchEstablishment'] = 0;
            };

            $db = CompanyEstablishmentDepartment::where('filter','LIKE','%'.strtolower($search['searchSector']).'%')
                ->orWhere('establishment_id',$search['searchEstablishment'])
                ->where('has_inventory_pharmacy',TRUE)
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

        if (!$db->has_inventory_pharmacy) {
            //Log do Sistema
            Logger::error($db->title);

            return redirect()->route('inventory_pharmacies.index')->with('error','Estoque não liberado para este departamento');
        }        

        if ($db->establishment_id) {

            $dbMedication = Medication::all();
            $dbInventories = InventoryPharmacy::where('establishment_department_id', $id)->get();
    
            //Log do Sistema
            Logger::show($db->title);
    
            return view('inventory.inventory_pharmacy.inventory_pharmacy_show',[
                'db'=>$db,
                'dbMedication'=>$dbMedication,
                'dbInventories'=>$dbInventories,
            ]);
        }        

        return redirect()->route('inventory_pharmacies.index')->with('error','Usuário sem permissão de acessar esse estoque');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryPharmacyRequest $request, InventoryPharmacy $inventoryPharmacyInventoryPharmacy)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryPharmacy $inventoryPharmacyInventoryPharmacy)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function request(string $id)
    {
        //
        $db = CompanyEstablishmentDepartment::find($id);       

        if (!$db->has_inventory_pharmacy) {
            //Log do Sistema
            Logger::error($db->title);

            return redirect()->route('inventory_pharmacies.index')->with('error','Estoque não liberado para este departamento');
        }        

        if ($db->establishment_id) {
            
            $dbMedication = Medication::all();
            $dbInventories = InventoryPharmacy::where('establishment_department_id', $id)->get();
            $dbInventoryHistories = InventoryPharmacyCenterHistory::where('department_exit_id', $id)
                ->where('pending', FALSE)
                ->orderBy('date')
                ->paginate(20);
    
            //Log do Sistema
            Logger::show($db->title);
    
            return view('inventory.inventory_pharmacy.inventory_pharmacy_request',[
                'db'=>$db,
                'dbMedication'=>$dbMedication,
                'dbInventories'=>$dbInventories,
                'dbInventoryHistories'=>$dbInventoryHistories,
            ]);

        }        

        return redirect()->route('inventory_pharmacies.index')->with('error','Usuário sem permissão de acessar esse estoque');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function entryCreate(string $id)
    {
        //
        $db = CompanyEstablishmentDepartment::find($id);      

        if (!$db->has_inventory_pharmacy) {
            //Log do Sistema
            Logger::error($db->title);

            return redirect()->route('inventory_pharmacies.index')->with('error','Estoque não liberado para este departamento');
        }        

        if ($db->establishment_id) {

            $dbMedication = Medication::all();
            $dbInventoryHistories = InventoryPharmacyHistory::where('loose',TRUE)->orderBy('created_at')->limit(20)->get();

            //Log do Sistema
            Logger::show($db->title);

            return view('inventory.inventory_pharmacy.inventory_pharmacy_create',[
                'db'=>$db,
                'dbMedication'=>$dbMedication,
                'dbInventoryHistories'=>$dbInventoryHistories,
            ]);
            
        }        

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
        $data['date'] = date('Y-m-d');
        $data['movement'] = 'Entrada';
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
        if ($data['movement'] === "Entrada") {
            $db->quantity += $data['quantity'];
        } elseif ($data['movement'] === "Saída") {
            $db->quantity -= $data['quantity'];
        }

        $db->save();

        if (isset($data['inventary_history'])) {
            $dbHistory = InventoryPharmacyCenterHistory::find($data['inventary_history']);
            $dbHistory->pending = TRUE;
            $dbHistory->save();
        }

        return redirect()->back()
            ->with('success', 'Histórico de inventário criado com sucesso.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function exitStore(StoreInventoryPharmacyHistoryRequest $request)
    {
        //
        $data = $request->all();
        $data['code'] = "SMS".time();
        $data['date'] = date('Y-m-d');
        $data['movement'] = 'Saída';
        $data['user_id'] = Auth::user()->id;

        //Verificando se existe estoque para realizar a saída
        $InventoryQuantityMedication = InventoryPharmacy::where('establishment_department_id',$data['establishment_department_id'])
            ->where('medication_id', $data['medication_id'])
            ->first();

        if ($InventoryQuantityMedication->quantity < $data['quantity']) {
            return redirect()->back()->with('error','Quantidade informada para saída não compatível com a quantidade no estoque atual');
        }

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

        $db->quantity -= $data['quantity'];
        $db->save();

        return redirect()->back()
            ->with('success', 'Saída realizada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function history(Request $request,string $id)
    {
        //Listagem de Dados
        $dbEstablishmentDepartment = InventoryPharmacyHistory::where('establishment_department_id',$id)
        ->first();

        if (!$dbEstablishmentDepartment->CompanyEstablishmentDepartment->has_inventory_pharmacy) {
            //Log do Sistema
            Logger::error($dbEstablishmentDepartment->title);

            return redirect()->route('inventory_pharmacies.index')->with('error','Estoque não liberado para este departamento');
        }       

        if ($dbEstablishmentDepartment->establishment_id) {

            $db = InventoryPharmacyHistory::where('establishment_department_id',$id)
            ->orderBy('created_at','DESC')
            ->paginate(40);
    
            $dbMedications = Medication::select()->orderBy('title')->get();
    
            //Pesquisar Dados
            $search = $request->all();
            if (isset($search['searchMedication']) || isset($search['searchDate'])) {
                $query = InventoryPharmacyHistory::query();
                if (!empty($search['searchMedication'])) {
                    $query->where('medication_id', $search['searchMedication']);
                }
                if (!empty($search['searchDate'])) {
                    $query->where('date', $search['searchDate']);
                }
                $db = $query->orderBy('quantity')->paginate(40);
            }
    
            //Log do Sistema
            Logger::access();
    
            return view('inventory.inventory_pharmacy.inventory_pharmacy_history',[
                'search'=>$search,
                'db'=>$db,
                'dbMedications'=>$dbMedications,
                'dbEstablishmentDepartment'=>$dbEstablishmentDepartment,
            ]);
            
        }        

        return redirect()->route('inventory_pharmacies.index')->with('error','Usuário sem permissão de acessar esse estoque');
    }
}
