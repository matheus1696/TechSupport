<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Dashboard;
use App\Services\Logger;
use Illuminate\Http\Request;

class ViewDashboardController extends Controller
{
    /*
     * Controller access permission resource.
     */
    public function __construct()
    {
        $this->middleware(['permission:sysadmin|admin|dashboard']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Listagem de Dados
        $db = Dashboard::where('status',true)->orderBy('title')->with('FinancialBlock')->get();

        Logger::access();

        return view('dashboard.dashboard_index',compact('db'));
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
        $db = Dashboard::find($id);

        //Log do Sistema
        Logger::show($db->title);

        return view('dashboard.dashboard_show', compact('db'));
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
}
