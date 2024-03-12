<?php

namespace App\Http\Controllers\Admin\Region;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Region\RegionCities;
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
        //Listando Dados
        $db = RegionCities::select()
            ->orderBy('status','DESC')
            ->orderBy('city')
            ->paginate(20);

        //Pesquisar Dados
        $search=$request->all();
        if (isset($search['searchName'])) {
            $db = RegionCities::where('filter','LIKE','%'.strtolower($search['searchName']).'%')
                ->orderBy('city')
                ->paginate(20);
        }

        //Log do Sistema
        Logger::access();

        return view('admin.region.cities.cities_index',[
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
        $db = RegionCities::find($id);
        $db->update($data);

        //Log do Sistema
        Logger::status($db->id, $db->status);

        return redirect(route('cities.index'));
    }
}
