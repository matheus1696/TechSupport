<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory\InventoryWarehouseEntry;
use App\Http\Requests\Inventory\StoreInventoryWarehouseEntryRequest;
use App\Http\Requests\Inventory\UpdateInventoryWarehouseEntryRequest;
use App\Models\Company\CompanyEstablishmentDepartment;
use App\Models\Company\CompanyFinancialBlock;
use App\Models\Inventory\InventoryWarehouse;
use App\Models\Inventory\InventoryWarehouseHistory;
use App\Models\Product\Product;
use App\Services\Logger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryWarehouseEntryController extends Controller
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
    public function store(StoreInventoryWarehouseEntryRequest $request)
    {
        //
        $data = $request->all();
        $data['code'] = "SMS".time();
        $data['movement'] = "Entrada";
        $data['user_id'] = Auth::user()->id;

        InventoryWarehouseHistory::create($data);

        //Quantidade do Estoque Geral
            //Buscando Cadastro
                $db = InventoryWarehouse::where('product_id',$data['product_id'])
                    ->where('establishment_department_id',$data['establishment_department_id'])
                    ->where('financial_block_id',$data['financial_block_id'])
                    ->first();

            //Verificando se existe o cadastro produto cadastrado
                if ($db == NULL) {
                    //Realizando a Criação
                    $db = InventoryWarehouse::create([
                        'quantity'=>0,
                        'establishment_id'=>$data['establishment_id'],
                        'establishment_department_id'=>$data['establishment_department_id'],
                        'product_id'=>$data['product_id'],
                        'financial_block_id'=>$data['financial_block_id'],
                    ]);
                }
        
            // Atualizar a quantidade no inventário com base no movimento
                $db->quantity += $data['quantity'];
                $db->save();

        //Quantidade por Ordem de Fornecimento e Nota Fiscal
            //Buscando Cadastro
                $dbEntry = InventoryWarehouseEntry::where('product_id',$data['product_id'])
                    ->where('establishment_department_id',$data['establishment_department_id'])
                    ->where('financial_block_id',$data['financial_block_id'])
                    ->where('supply_order',$data['supply_order'])
                    ->where('invoice',$data['invoice'])
                    ->first();

            //Verificando se existe o produto cadastrado
                if ($dbEntry == NULL) {                    
                    //Realizando a Criação
                    $dbEntry = InventoryWarehouseEntry::create([
                        'invoice'=>$data['invoice'],
                        'supply_order'=>$data['supply_order'],
                        'supply_company'=>$data['supply_company'],
                        'quantity'=>0,
                        'product_id'=>$data['product_id'],
                        'establishment_id'=>$data['establishment_id'],
                        'establishment_department_id'=>$data['establishment_department_id'],
                        'financial_block_id'=>$data['financial_block_id'],
                    ]);
                }
        
            // Atualizar a quantidade por Ordem de Fornecimento e Nota Fiscal
                $dbEntry->quantity += $data['quantity'];
                $dbEntry->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        //
        $db = CompanyEstablishmentDepartment::find($id);
        $dbProducts = Product::all();
        $dbFinancialBlocks = CompanyFinancialBlock::all();
        $dbInventories = InventoryWarehouseHistory::where('establishment_department_id', $id)
        ->where('date','>=',today()->subDay(7))
        ->orderBy('date', 'DESC')
        ->orderBy('product_id')
        ->orderBy('financial_block_id')
        ->with('Product')
        ->with('CompanyEstablishment')
        ->with('CompanyEstablishmentDepartment')
        ->with('CompanyFinancialBlock')
        ->paginate(20);

        //Log do Sistema
        Logger::show($db->title);

        return view('inventory.inventory_warehouse_entry.inventory_warehouse_entry_show',[
            'db'=>$db,
            'dbProducts'=>$dbProducts,
            'dbFinancialBlocks'=>$dbFinancialBlocks,
            'dbInventories'=>$dbInventories,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InventoryWarehouseEntry $InventoryWarehouseEntry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryWarehouseEntryRequest $request, InventoryWarehouseEntry $InventoryWarehouseEntry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryWarehouseEntry $InventoryWarehouseEntry)
    {
        //
    }
}
