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
        //Header
        $header = [
            'title'=>'Processos Licitatórios',
            'route'=>route('biddings.create'),
        ];

        $db = BiddingModel::paginate(20);
        $dbBiddigItens = BiddingItensModel::all();

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchCod']) || isset($search['searchName'])) {
            $db = BiddingModel::where('cod_processo','LIKE','%'.strtolower($search['searchCod']).'%')
                ->where('ft_processo','LIKE','%'.strtolower($search['searchName']).'%')
                ->orderBy('no_processo')
                ->paginate(20);
        }

        //Logs
        Logger::access($header['title']);

        return view('bidding.bidding.biddings_index',[
            'header'=>$header,
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
        //Header
        $header = [
            'title'=>'Adicionar Processo Licitatório',
        ];

        //Logs
        Logger::create($header['title']);

        return view('bidding.bidding.biddings_create',[
            'header'=>$header,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BiddingStoreRequest $request)
    {
        //Dados dos Formulários
        $data = $request->all();
        $data['ft_processo'] = StrtoLower($data['no_processo']);

        //Salvando Dados
        BiddingModel::create($data);

        //Logs
        Logger::store($data['no_processo']);

        return redirect(route('biddings.index'))->with('success','Cadastro salvo com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Listagem de Dados
        $db = BiddingModel::find($id);
        $dbBiddigItens = BiddingItensModel::where('processo_id', $id)->get();

        //Header
        $header = [
            'title'=>'Processo Licitatório',
        ];

        //Logs
        Logger::show($db->no_processo);

        return view('bidding.bidding.biddings_show',[
            'header'=>$header,
            'db'=>$db,
            'dbBiddingItens'=>$dbBiddigItens,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Header
        $header = [
            'title'=>'Alterar Dados Processo Licitatório',
        ];

        //Listagem de Dados
        $db = BiddingModel::find($id);

        //Logs
        Logger::edit($id);

        return view('bidding.bidding.biddings_edit',[
            'header'=>$header,
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
        $data['ft_processo'] = StrtoLower($data['no_processo']);
        $data['tempo_vigencia'] = floor((strtotime($data['data_vencimento']) - strtotime($data['data_inicio'])) / (60 * 60 * 24 ) / 30);;

        //Salvando Dados
        $db = BiddingModel::find($id);
        $db->update($data);
        $db->save();

        //Logs
        Logger::update($id);

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
        $data = $request->only('st_processo');

        //Salvando Dados
        $db = BiddingModel::find($id);
        $db->update($data);
        $db->save();

        //Logs
        Logger::status($id,$data['st_processo']);

        return redirect(route('biddings.index'))->with('success','Status alterado com sucesso.');
    }
}
