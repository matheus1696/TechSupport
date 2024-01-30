<?php

namespace App\Http\Controllers\Bidding;

use App\Models\Bidding\BiddingModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BiddingStoreRequest;
use App\Http\Requests\BiddingUpdateRequest;
use App\Models\Bidding\BiddingItensModel;
use App\Services\Logger;

class BiddingController extends Controller
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
    public function index(Request $request)
    {
        $db = BiddingModel::paginate(20);
        $dbBiddigItens = BiddingItensModel::all();

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchCod']) || isset($search['searchName'])) {
            $db = BiddingModel::where('code_process','LIKE','%'.strtolower($search['searchCod']).'%')
                ->where('filter','LIKE','%'.strtolower($search['searchName']).'%')
                ->orderBy('process')
                ->paginate(20);
        }

        //Logs
        Logger::access();

        return view('bidding.bidding.biddings_index',[
            'search'=>$search,
            'db'=>$db,
            'dbBiddigItens'=>$dbBiddigItens,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Logs
        Logger::create();

        return view('bidding.bidding.biddings_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BiddingStoreRequest $request)
    {
        //Dados dos Formulários
        $data = $request->all();
        $data['filter'] = StrtoLower($data['bidding_process']);

        //Salvando Dados
        BiddingModel::create($data);

        //Logs
        Logger::store();

        return redirect(route('biddings.index'))->with('success','Cadastro salvo com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Listagem de Dados
        $db = BiddingModel::find($id);
        $dbBiddigItens = BiddingItensModel::where('process_id', $id)->get();

        //Logs
        Logger::show();

        return view('bidding.bidding.biddings_show',[
            'db'=>$db,
            'dbBiddingItens'=>$dbBiddigItens,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Listagem de Dados
        $db = BiddingModel::find($id);

        //Logs
        Logger::edit();

        return view('bidding.bidding.biddings_edit',[
            'db'=>$db,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BiddingUpdateRequest $request, string $id)
    {
        //Dados dos Formulários
        $data = $request->all();
        $data['filter'] = StrtoLower($data['bidding_process']);
        $data['validity'] = floor((strtotime($data['due_date']) - strtotime($data['start_date'])) / (60 * 60 * 24 ) / 30);;

        //Salvando Dados
        $db = BiddingModel::find($id);
        $db->update($data);

        //Logs
        Logger::update();

        return redirect(route('biddings.show',['bidding'=>$id]))->with('success','Cadastro atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }

    /**
     * Update the status of the specified item in storage.
     */
    public function status(Request $request, string $id)
    {
        //Dados dos Formulários
        $data = $request->only('status');

        //Salvando Dados
        $db = BiddingModel::find($id);
        $db->update($data);

        //Logs
        Logger::status($db->id, $db->status);

        return redirect(route('biddings.index'))->with('success','Status alterado com sucesso.');
    }
}
