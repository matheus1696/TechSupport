<?php

namespace App\Http\Controllers\Admin\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompanyOccupationsModel;
use App\Services\Logger;

class CompanyOccupationController extends Controller
{
    /*
     * Controller access permission resource.
     */
    public function __construct()
    {
        $this->middleware(['permission:sysadmin|admin']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //Header
        $header = [
            'title' => 'Ocupações (CBO)',
        ];

        //Listando Dados
        $db = CompanyOccupationsModel::select()
            ->orderBy('st_cbo','DESC')
            ->orderBy('no_cbo')
            ->paginate(20);

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchName']) || isset($search['searchCod'])) {
            $db = CompanyOccupationsModel::where('cod_cbo','LIKE','%'.strtolower($search['searchCod']).'%')
                ->where('ft_cbo','LIKE','%'.strtolower($search['searchName']).'%')
                ->orderBy('cod_cbo')
                ->paginate(20);
        }

        //Log do Sistema
        Logger::access($header['title']);

        return view('admin.company.occupations.occupations_index', [
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
        //Dados dos Formulário
        $data = $request->all();

        //Listando Dados
        $db = CompanyOccupationsModel::find($id);

        //Atualizando Dados
        $db->update($data);
        $db->save();

        //Log do Sistema
        Logger::status($db->no_cbo,$data['st_cbo']);

        return redirect(route('occupations.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
