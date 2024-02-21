<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Company\CompanyFinancialBlocksModel;
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
        $db = Dashboard::select()->orderBy('title')->with('FinancialBlocks')->paginate(20);

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
        $dbFinancialBlock = CompanyFinancialBlocksModel::all();

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

        return redirect(route('dashboards.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $db = Dashboard::find($id);

        return view('dashboard.dashboard_show', compact('db'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $db = Dashboard::find($id);
        $dbFinancialBlock = CompanyFinancialBlocksModel::all();

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

        return redirect(route('dashboards.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
