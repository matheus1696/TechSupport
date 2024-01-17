<?php

namespace App\Http\Controllers\Admin\Region;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RegionCitiesModel;
use App\Services\Logger;

class RegionCitiesController extends Controller
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
            'title' => 'Cidades',
            'route' => route('cities.create'),
        ];

        //Listando Dados
        $db = RegionCitiesModel::select()
            ->orderBy('st_municipio','DESC')
            ->orderBy('no_municipio')
            ->paginate(20);

        //Pesquisar Dados
        $search=$request->all();
        if (isset($search['searchName'])) {
            $db = RegionCitiesModel::where('ft_municipio','LIKE','%'.strtolower($search['searchName']).'%')
                ->orderBy('no_municipio')
                ->paginate(20);

            //Log do Sistema
            Logger::access($header['title']. 'com filtros.'. $search['searchName']);
        }

        //Log do Sistema
        Logger::access($header['title']);

        return view('admin.region.cities.cities_index',[
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
     * Update the status of the specified item in storage.
     */
    public function status(Request $request, string $id)
    {
        //Dados encaminhado pelo Formulário
        $data = $request->all();

        //Salvando Dados
        $db = RegionCitiesModel::find($id);
        $db->update($data);
        $db->save();

        //Log do Sistema
        Logger::status($db->no_municipio,$db->st_municipio);

        return redirect(route('cities.index'));
    }
}
