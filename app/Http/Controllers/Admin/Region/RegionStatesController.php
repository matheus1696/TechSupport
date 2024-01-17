<?php

namespace App\Http\Controllers\Admin\Region;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RegionStatesModel;
use App\Services\Logger;

class RegionStatesController extends Controller
{
    /*
     * Controller access permission resource.
     */
    public function __construct()
    {
        $this->middleware(['permission:sysadmin']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //Header
        $header =[
            'title' => 'Estados',
            'route' => route('states.create'),
        ];

        //Listando Dados
        $db = RegionStatesModel::select()
            ->orderBy('st_estado','DESC')
            ->orderBy('no_estado')
            ->paginate(20);

        //Pesquisar Dados
        $search=$request->all();
        if (isset($search['searchName'])) {
            $db = RegionStatesModel::where('ft_estado','LIKE','%'.strtolower($search['searchName']).'%')
                ->orderBy('no_estado')
                ->paginate(20);

            //Log do Sistema
            Logger::access($header['title']. 'com filtros '. $search['searchName']);
        }

        //Log do Sistema
        Logger::access($header['title']);

        return view('admin.region.states.states_index',[
            'header'=>$header,
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     *  Update the status of the specified item in storage.
     */
    public function status(Request $request, string $id)
    {
        //Dados encaminhado pelo Formulário
        $data = $request->all();

        //Salvando Dados
        $db = RegionStatesModel::find($id);
        $db->update($data);
        $db->save();

        //Log do Sistema
        Logger::status($db->no_estado,$db->st_estado);

        return redirect(route('states.index'));
    }
}
