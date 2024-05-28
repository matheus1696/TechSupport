<?php

namespace App\Http\Controllers\Inventory\PharmacyCenter;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\PharmacyCenter\StoreInventoryPharmacyCenterEntryRequest;
use App\Http\Requests\Inventory\PharmacyCenter\StoreInventoryPharmacyCenterExitRequest;
use App\Models\Inventory\InventoryPharmacyCenter;
use App\Models\Company\CompanyEstablishment;
use App\Models\Company\CompanyEstablishmentDepartment;
use App\Models\Company\CompanyFinancialBlock;
use App\Models\Inventory\InventoryPharmacyCenterEntry;
use App\Models\Inventory\InventoryPharmacyCenterHistory;
use App\Models\Inventory\InventoryPharmacyCenterPermission;
use App\Models\Medication\Medication;
use App\Services\Logger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryPharmacyCenterController extends Controller
{
    /*
     * Controller access permission resource.
     */
    public function __construct()
    {
        $this->middleware(['permission:sysadmin|admin|inventory_pharmacy_center']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //Listagem de Dados
        $query = CompanyEstablishmentDepartment::query();
        $db = $query->where('has_inventory_pharmacy_center',TRUE);
        $dbEstablishments = CompanyEstablishment::all();

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchSector']) || isset($search['searchEstablishment'])) {
            if (!empty($search['searchSector'])) { $query->where('filter','LIKE','%'.strtolower($search['searchSector']).'%');}    
            if (!empty($search['searchEstablishment'])) { $query->where('establishment_id', $search['searchEstablishment']);}
        }
        
        $db = $query->orderBy('department')->paginate(20);

        //Log do Sistema
        Logger::access();

        return view('inventory.inventory_pharmacy_center.inventory_pharmacy_center_index',[
            'search'=>$search,
            'db'=>$db,
            'dbEstablishments'=>$dbEstablishments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){ return redirect()->route('login');}

    /**
     * Store a newly created resource in storage.
     */
    public function store(){ return redirect()->route('login');}

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        // Recupera o departamento específico
        $db = CompanyEstablishmentDepartment::find($id);

        if (!$db->has_inventory_pharmacy_center) {
            //Log do Sistema
            Logger::error('Centro de Distribuição não liberado para este departamento');

            return redirect()->route('inventory_pharmacy_centers.index')->with('error','Centro de Distribuição não liberado para este departamento');
        }

        //Verificação de Permissão para o estoque
        $validadeInventoryPermission = InventoryPharmacyCenterPermission::where('user_id',Auth::user()->id)
            ->where('establishment_department_id',$db->id)
            ->first();

        if ($validadeInventoryPermission) {           

            // Recupera todos os produtos e bloco de financiamentos
            $dbMedications = Medication::select()->orderBy('title')->get();
            $dbFinancialBlocks = CompanyFinancialBlock::select()->orderBy('title')->get();

            // Recupera todos os departamentos com inventário de produtos
            $dbEstablishmentDepartments = CompanyEstablishmentDepartment::where('has_inventory_pharmacy', true)
            ->join('company_establishments', 'company_establishment_departments.establishment_id', '=', 'company_establishments.id')
            ->select('company_establishment_departments.*', 'company_establishments.title as establishment_title')
            ->orderBy('company_establishments.title')
            ->orderBy('department')
            ->with('CompanyEstablishment')
            ->get();

            // Consulta de entradas de inventário com quantidade maior que zero
            $dbInventoryEntries = InventoryPharmacyCenterEntry::where('establishment_department_id', $id)
            ->where('quantity', '>', 0)
            ->join('medications', 'inventory_pharmacy_center_entries.medication_id', '=', 'medications.id')
            ->join('company_financial_blocks', 'inventory_pharmacy_center_entries.financial_block_id', '=', 'company_financial_blocks.id')
            ->select('inventory_pharmacy_center_entries.*', 'medications.title as medication_title', 'company_financial_blocks.acronym as financial_block_acronym')
            ->orderBy('medications.title')
            ->orderBy('quantity')
            ->orderBy('company_financial_blocks.acronym')
            ->with(['Medication','CompanyEstablishment','CompanyEstablishmentDepartment','CompanyFinancialBlock'])
            ->get();

            // Consulta de inventário geral
            $query = InventoryPharmacyCenter::query(); 
            $query->where('establishment_department_id', $id);   

            //Pesquisar Dados
            $search = $request->all();
            if (isset($search['searchMedication']) || isset($search['searchFinancialBlock'])) {         
                if (!empty($search['searchMedication'])) { $query->where('medication_id', $search['searchMedication']);}            
                if (!empty($search['searchFinancialBlock'])) {$query->where('financial_block_id', $search['searchFinancialBlock']);}
            }

            $dbInventories = $query->join('medications', 'inventory_pharmacy_centers.medication_id', '=', 'medications.id')
            ->join('company_financial_blocks', 'inventory_pharmacy_centers.financial_block_id', '=', 'company_financial_blocks.id')
            ->select('inventory_pharmacy_centers.*', 'medications.title as medication_title', 'company_financial_blocks.acronym as financial_block_acronym')
            ->orderBy('medications.title')
            ->orderBy('company_financial_blocks.acronym')
            ->orderBy('quantity')
            ->with(['Medication','CompanyEstablishment','CompanyEstablishmentDepartment','CompanyFinancialBlock'])
            ->get();

            //Log do Sistema
            Logger::show($db->title);

            return view('inventory.inventory_pharmacy_center.inventory_pharmacy_center_show',[
                'db'=>$db,
                'search'=>$search,
                'dbMedications'=>$dbMedications,
                'dbFinancialBlocks'=>$dbFinancialBlocks,
                'dbEstablishmentDepartments'=>$dbEstablishmentDepartments,
                'dbInventories'=>$dbInventories,
                'dbInventoryEntries'=>$dbInventoryEntries,
            ]);
        }        

        return redirect()->route('inventory_pharmacy_centers.index')->with('error','Usuário sem permissão de acessar esse estoque');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(){ return redirect()->route('login');}

    /**
     * Update the specified resource in storage.
     */
    public function update(){ return redirect()->route('login');}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(){ return redirect()->route('login');}

    /**
     * Store Inventory PharmacyCenter a newly created resource in storage.
     */
    public function entryStore(StoreInventoryPharmacyCenterEntryRequest $request)
    {
        //
        $data = $request->all();
        $data['code'] = "SMS".time();
        $data['movement'] = "Entrada";
        $data['pending'] = FALSE;
        $data['user_id'] = Auth::user()->id;

        InventoryPharmacyCenterHistory::create($data);

        //Quantidade do Estoque Geral
            //Buscando Cadastro
                $db = InventoryPharmacyCenter::where('medication_id',$data['medication_id'])
                    ->where('establishment_department_id',$data['department_entry_id'])
                    ->where('financial_block_id',$data['financial_block_id'])
                    ->first();

            //Verificando se existe o cadastro produto cadastrado
                if ($db == NULL) {
                    //Realizando a Criação
                    $db = InventoryPharmacyCenter::create([
                        'quantity'=>0,
                        'establishment_id'=>$data['establishment_entry_id'],
                        'establishment_department_id'=>$data['department_entry_id'],
                        'medication_id'=>$data['medication_id'],
                        'financial_block_id'=>$data['financial_block_id'],
                    ]);
                }
        
            // Atualizar a quantidade no inventário com base no movimento
                $db->quantity += $data['quantity'];
                $db->save();

        //Quantidade por Ordem de Fornecimento e Nota Fiscal
            //Buscando Cadastro
                $dbEntry = InventoryPharmacyCenterEntry::where('medication_id',$data['medication_id'])
                    ->where('establishment_department_id',$data['department_entry_id'])
                    ->where('financial_block_id',$data['financial_block_id'])
                    ->where('supply_order',$data['supply_order'])
                    ->where('invoice',$data['invoice'])
                    ->first();

            //Verificando se existe o produto cadastrado
                if ($dbEntry == NULL) {                    
                    //Realizando a Criação
                    $dbEntry = InventoryPharmacyCenterEntry::create([
                        'invoice'=>$data['invoice'],
                        'supply_order'=>$data['supply_order'],
                        'supply_company'=>$data['supply_company'],
                        'quantity'=>0,
                        'medication_id'=>$data['medication_id'],
                        'establishment_id'=>$data['establishment_entry_id'],
                        'establishment_department_id'=>$data['department_entry_id'],
                        'financial_block_id'=>$data['financial_block_id'],
                    ]);
                }
        
            // Atualizar a quantidade por Ordem de Fornecimento e Nota Fiscal
                $dbEntry->quantity += $data['quantity'];
                $dbEntry->save();

        return redirect()->back()->with('success','Produto cadastrado com sucesso');
    }

    /**
     * Display the specified resource Entry PharmacyCenter.
     */
    public function entryCreate(string $id)
    {
        //
        $db = CompanyEstablishmentDepartment::find($id);        

        if (!$db->has_inventory_pharmacy_center) {
            //Log do Sistema
            Logger::error('Centro de Distribuição não liberado para este departamento');

            return redirect()->route('inventory_pharmacy_centers.index')->with('error','Centro de Distribuição não liberado para este departamento');
        }

        //Verificação de Permissão para o estoque
        $validadeInventoryPermission = InventoryPharmacyCenterPermission::where('user_id',Auth::user()->id)
            ->where('establishment_department_id',$db->id)
            ->first();

        if ($validadeInventoryPermission) {

            $dbMedications = Medication::select()->orderBy('title')->get();;
            $dbFinancialBlocks = CompanyFinancialBlock::select()->orderBy('title')->get();;
            $dbInventories = InventoryPharmacyCenterHistory::where('inventory_pharmacy_center_histories.department_entry_id', $id)
                ->where('inventory_pharmacy_center_histories.created_at', '>=', now()->subDays(7))
                ->where('inventory_pharmacy_center_histories.movement', 'Entrada')
                ->join('medications', 'inventory_pharmacy_center_histories.medication_id', '=', 'medications.id')
                ->join('company_financial_blocks', 'inventory_pharmacy_center_histories.financial_block_id', '=', 'company_financial_blocks.id')
                ->select('inventory_pharmacy_center_histories.*','medications.title as medication_title','company_financial_blocks.acronym as financial_block_acronym')
                ->orderBy('inventory_pharmacy_center_histories.date', 'DESC')
                ->orderBy('medications.title')
                ->orderBy('company_financial_blocks.acronym')
                ->with(['Medication', 'CompanyFinancialBlock', 'CompanyEstablishmentEntry', 'CompanyEstablishmentDepartmentEntry', 'CompanyEstablishmentExit', 'CompanyEstablishmentDepartmentExit'])
                ->select('inventory_pharmacy_center_histories.*')
                ->limit(20)
                ->get();
    
            //Log do Sistema
            Logger::show($db->title);
    
            return view('inventory.inventory_pharmacy_center.inventory_pharmacy_center_entry',[
                'db'=>$db,
                'dbMedications'=>$dbMedications,
                'dbFinancialBlocks'=>$dbFinancialBlocks,
                'dbInventories'=>$dbInventories,
            ]);
            
        }        

        return redirect()->route('inventory_pharmacy_centers.index')->with('error','Usuário sem permissão de acessar esse estoque');
    }

    /**
     * Store Inventory PharmacyCenter a newly created resource in storage.
     */
    public function exitStore(StoreInventoryPharmacyCenterExitRequest $request)
    {
        //
        $data = $request->all();
        $data['code'] = "SMS".time();
        $data['movement'] = "Saída";
        $data['user_id'] = Auth::user()->id;

        //Verificando se existe estoque para realizar a saída
        $InventoryQuantityMedication = InventoryPharmacyCenter::where('establishment_department_id',$data['department_entry_id'])
            ->where('medication_id', $data['medication_id'])
            ->where('financial_block_id', $data['financial_block_id'])
            ->first();

        if ($InventoryQuantityMedication->quantity < $data['quantity']) {
            return redirect()->back()->with('error','Quantidade informada para saída não compatível com a quantidade no estoque atual');
        }

        $dbHistory = InventoryPharmacyCenterHistory::create($data);

        //Vinculando Almoxarifado que Recebe o Produto
        $dbEstablishmentDepartment = CompanyEstablishmentDepartment::find($data['department_exit_id']);
        $dbHistory->department_exit_id = $dbEstablishmentDepartment->id;
        $dbHistory->establishment_exit_id = $dbEstablishmentDepartment->establishment_id;
        $dbHistory->save();

        //Quantidade do Estoque Geral
            //Buscando Cadastro
                $db = InventoryPharmacyCenter::where('medication_id',$data['medication_id'])
                    ->where('establishment_department_id',$data['department_entry_id'])
                    ->where('financial_block_id',$data['financial_block_id'])
                    ->first();

            //Verificando se existe o cadastro produto cadastrado
                if ($db == NULL) {
                    //Realizando a Criação
                    $db = InventoryPharmacyCenter::create([
                        'quantity'=>0,
                        'establishment_id'=>$data['establishment_id'],
                        'establishment_department_id'=>$data['department_entry_id'],
                        'medication_id'=>$data['medication_id'],
                        'financial_block_id'=>$data['financial_block_id'],
                    ]);
                }
        
            // Atualizar a quantidade no inventário com base no movimento
                $db->quantity -= $data['quantity'];
                $db->save();

        //Quantidade por Ordem de Fornecimento e Nota Fiscal
            //Buscando Cadastro
                $dbEntry = InventoryPharmacyCenterEntry::where('medication_id',$data['medication_id'])
                    ->where('establishment_department_id',$data['department_entry_id'])
                    ->where('financial_block_id',$data['financial_block_id'])
                    ->where('supply_order',$data['supply_order'])
                    ->where('invoice',$data['invoice'])
                    ->first();

            //Verificando se existe o produto cadastrado
                if ($dbEntry == NULL) {                    
                    //Realizando a Criação
                    $dbEntry = InventoryPharmacyCenterEntry::create([
                        'invoice'=>$data['invoice'],
                        'supply_order'=>$data['supply_order'],
                        'supply_company'=>$data['supply_company'],
                        'quantity'=>0,
                        'medication_id'=>$data['medication_id'],
                        'establishment_id'=>$data['establishment_id'],
                        'establishment_department_id'=>$data['department_entry_id'],
                        'financial_block_id'=>$data['financial_block_id'],
                    ]);
                }
        
            // Atualizar a quantidade por Ordem de Fornecimento e Nota Fiscal
                $dbEntry->quantity -= $data['quantity'];
                $dbEntry->save();

        return redirect()->back()->with('success','Produto cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function history(Request $request, string $id)
    {
        //Listagem de Dados
        $dbEstablishmentDepartment = InventoryPharmacyCenterHistory::where('department_entry_id',$id)
        ->first();       

        if ($dbEstablishmentDepartment->has_inventory_pharmacy_center) {
            //Log do Sistema
            Logger::error('Central de Abastecimento Farmacêutico não liberado para este departamento');

            return redirect()->route('inventory_pharmacy_centers.index')->with('error','Central de Abastecimento Farmacêutico não liberado para este departamento');
        }

        //Verificação de Permissão para o estoque
        $validadeInventoryPermission = InventoryPharmacyCenterPermission::where('user_id',Auth::user()->id)
            ->where('establishment_department_id',$dbEstablishmentDepartment->establishment_department_id)
            ->first();

        if ($validadeInventoryPermission) {

            $dbMedications = Medication::select()->orderBy('title')->get();

            $query = InventoryPharmacyCenterHistory::query();
            $query->where('department_entry_id',$id)
            ->orderBy('created_at','DESC')
            ->paginate(40);

            //Pesquisar Dados
            $search = $request->all();
            if (isset($search['searchMedication']) || isset($search['searchDate'])) {

                if (!empty($search['searchMedication'])) {$query->where('medication_id', $search['searchMedication']);}
                if (!empty($search['searchDate'])) {$query->where('date', $search['searchDate']);}
            }

            $db = $query->paginate(40);

            //Log do Sistema
            Logger::access();

            return view('inventory.inventory_pharmacy_center.inventory_pharmacy_center_history',[
                'search'=>$search,
                'db'=>$db,
                'dbMedications'=>$dbMedications,
                'dbEstablishmentDepartment'=>$dbEstablishmentDepartment,
            ]);
        }

        return redirect()->route('inventory_pharmacy_centers.index')->with('error','Usuário sem permissão de acessar esse estoque');
    }
}
