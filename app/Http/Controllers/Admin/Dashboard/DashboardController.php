<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Company\CompanyFinancialBlock;
use App\Models\Dashboard\Dashboard;
use App\Services\Logger;
use Illuminate\Http\Request;

class DashboardController extends Controller
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
    public function index()
    {
        //Listagem de Dados
        $db = Dashboard::select()->orderBy('title')->with('FinancialBlock')->paginate(20);

        //Log do Sistema
        Logger::access();

        return view('admin.dashboard.dashboard_index',[
            'db'=>$db,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {        
        $dbFinancialBlock = CompanyFinancialBlock::all();

        //Log do Sistema
        Logger::create();

        return view('admin.dashboard.dashboard_create',[
            'dbFinancialBlock'=>$dbFinancialBlock,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Dashboard::create($data);

        //Log do Sistema
        Logger::store($data['title']);

        return redirect(route('dashboards.index'));
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
        $db = Dashboard::find($id);
        $dbFinancialBlock = CompanyFinancialBlock::all();

        //Log do Sistema
        Logger::edit($db->title);

        return view('admin.dashboard.dashboard_edit',[
            'db'=>$db,
            'dbFinancialBlock'=>$dbFinancialBlock,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->all();

        $db = Dashboard::find($id);
        $db->update($data);

        //Log do Sistema
        Logger::update($db->title);

        return redirect(route('dashboards.index'));
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
        $db = Dashboard::find($id);
        $db->update($data);

        //Log do Sistema
        Logger::status($db->id, $db->status);

        return redirect()->back();
    }
}
