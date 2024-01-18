<?php

namespace App\Http\Controllers\Bidding;

use App\Http\Controllers\Controller;
use App\Http\Requests\BiddingItensStoreRequest;
use App\Http\Requests\BiddingItensUpdateRequest;
use App\Models\Bidding\BiddingModel;
use App\Models\Bidding\BiddingItensModel;
use App\Models\Product\ProductModel;
use App\Models\Product\ProductUnitModel;
use App\Services\Logger;

class BiddingItensController extends Controller
{
    /*
     * Controller access permission resource.
     */
    public function __construct()
    {
        $this->middleware(['permission:sysadmin|admin|bidding']);
    }

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
    public function create(string $id)
    {
        //Listando Dados
        $dbBidding = BiddingModel::find($id);
        $dbProducts = ProductModel::where('status',true)->orderBy('product')->get();
        $dbUnits = ProductUnitModel::all();

        return view('bidding.bidding_itens.biddings_itens_create',[
            'dbBidding'=>$dbBidding,
            'dbProducts'=>$dbProducts,
            'dbUnits'=>$dbUnits,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BiddingItensStoreRequest $request)
    {
        //Dados dos Formulários
        $data = $request->all();

        //Salvando Dados
        BiddingItensModel::create($data);

        return redirect(route('biddings.show',['bidding'=>$data['processo_id']]))
            ->with('success','Cadastro salvo com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Listagem de Dados
        $db = BiddingItensModel::find($id);
        $dbBidding = BiddingModel::find($db['process_id']);
        $dbProducts = ProductModel::all();
        $dbUnits = ProductUnitModel::all();

        return view('bidding.bidding_itens.biddings_itens_edit',[
            'db'=>$db,
            'dbBidding'=>$dbBidding,
            'dbProducts'=>$dbProducts,
            'dbUnits'=>$dbUnits,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id, BiddingItensUpdateRequest $request)
    {
        //Dados dos Formulários
        $data = $request->all();

        //Salvando Dados
        $db = BiddingItensModel::find($id);
        $db->update($data);

        return redirect(route('biddings.show',['bidding'=>$data['processo_id']]))
            ->with('success','Cadastro salvo com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //Listando Dados
        $db = BiddingItensModel::find($id);

        //Exclusão de Item
            $db->delete();

            //Log do Sistema
            Logger::destroy();

            return redirect(route('biddings.show',['bidding'=>$db['processo_id']]))
                ->with('success','Item excluido com sucesso');
    }
}
