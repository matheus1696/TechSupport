<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Public\ContactListsController;
use App\Http\Controllers\Users\Profile\ProfileController;
use App\Http\Controllers\Admin\Users\UsersController;
use App\Http\Controllers\Admin\Company\CompanyFinancialBlocksController;
use App\Http\Controllers\Admin\Company\CompanyEstablishmentsController;
use App\Http\Controllers\Admin\Company\CompanyEstablishmentDepartmentsController;
use App\Http\Controllers\Admin\Company\CompanyOccupationController;
use App\Http\Controllers\Admin\Company\CompanyOrganizationalController;
use App\Http\Controllers\Admin\Company\CompanyTypeEstablishmentsController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Region\RegionCitiesController;
use App\Http\Controllers\Admin\Region\RegionCountriesController;
use App\Http\Controllers\Admin\Region\RegionStatesController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Product\ProductUnitController;
use App\Http\Controllers\Dashboard\ViewDashboardController;
use App\Http\Controllers\SupplyProcess\SupplyProcessesController;
use App\Http\Controllers\SupplyProcess\SupplyProcessItemsController;

Route::get('/',function(){return view('index');});


//Lista Telefônica
Route::resource('contacts', ContactListsController::class);

//Grupo de Rotas - Configuração de Dashbaord
Route::prefix('dashboards')->group(function (){
    Route::resource('view_dashboards',ViewDashboardController::class);
});

//Camada de Seguraça para Usuários Logados
Route::middleware('auth')->group(function () {

    //Camada de Seguraça para Contas Verificadas
    Route::middleware(['verified'])->group(function () {

        //Grupo de Rodas - Configurações do Sistema
        Route::prefix('admin')->group(function (){

            //Grupo de Rotas - Configuração dos Perfis dos Usuários
            Route::prefix('user')->group(function (){
                //Rota - Dados dos Usuários Cadastrados
                Route::get('users/verify/{user}',[UsersController::class,'verify'])->name('users.verify');
                Route::resource('users',UsersController::class);
            });

            //Grupo de Rotas - Configurações da Organização
            Route::prefix('company')->group(function (){
                //Rota - Dados dos Setores
                Route::get('organizational/organize',[CompanyOrganizationalController::class,'organize'])->name('organizational.organize');
                Route::put('organizational/status/{organizational}',[CompanyOrganizationalController::class,'status'])->name('organizational.status');
                Route::resource('organizational',CompanyOrganizationalController::class);
                //Rota - Dados Ocupação (CBO)
                Route::resource('occupations',CompanyOccupationController::class);
                //Rota - Dados Tipo de Estabelecimento
                Route::resource('type_establishments',CompanyTypeEstablishmentsController::class);
                //Rota - Dados Estabelecimento de Saúde
                Route::put('establishments/status/{establishment}',[CompanyEstablishmentsController::class,'status'])->name('establishments.status');
                Route::resource('establishments',CompanyEstablishmentsController::class);
                //Rota - Dados do Contato Estabelecimento de Saúde
                Route::resource('establishment_contacts',CompanyEstablishmentDepartmentsController::class);
                //Rota - Nível de Atenção
                Route::resource('financial_blocks',CompanyFinancialBlocksController::class);
            });

            //Grupo de Rotas - Configuração de Localização
            Route::prefix('region')->group(function (){
                //Rota - Dados Paises
                Route::put('countries/status/{country}',[RegionCountriesController::class,'status'])->name('countries.status');
                Route::resource('countries',RegionCountriesController::class);
                //Rota - Dados Estados
                Route::put('states/status/{state}',[RegionStatesController::class,'status'])->name('states.status');
                Route::resource('states',RegionStatesController::class);
                //rota - Dados Cidades
                Route::put('cities/status/{city}',[RegionCitiesController::class,'status'])->name('cities.status');
                Route::resource('cities',RegionCitiesController::class);
            });

            //Grupo de Rotas - Configuração de Produtos
            Route::prefix('products')->group(function (){
                Route::put('products/status/{product}',[ProductController::class,'status'])->name('products.status');
                Route::resource('products',ProductController::class);

                Route::put('units/status/{unit}',[ProductUnitController::class,'status'])->name('units.status');
                Route::resource('units',ProductUnitController::class);
            });            

            //Grupo de Rotas - Configuração de Dashbaord
            Route::prefix('dashboards')->group(function (){
                Route::resource('dashboards',DashboardController::class);
            });
        });

        //Grupo de Rotas - Processos Licitatórios
        Route::prefix('supply_processes')->group(function (){

            //Grupo de Rotas - Configurações de Processos Licitatórios
                Route::put('supply_processes/status/{supply_process}',[SupplyProcessesController::class,'status'])->name('supply_processes.status');
                Route::resource('supply_processes',SupplyProcessesController::class);

            //Grupo de Rotas - Configurações dos Itens dos Processos Licitatórios
                Route::get('{supply_process}/items/create/',[SupplyProcessItemsController::class,'create'])->name('supply_process_items.create');
                Route::post('items/store',[SupplyProcessItemsController::class,'store'])->name('supply_process_items.store');
                Route::get('itens/{supply_process_item}/edit',[SupplyProcessItemsController::class,'edit'])->name('supply_process_items.edit');
                Route::put('itens/{supply_process_item}/update',[SupplyProcessItemsController::class,'update'])->name('supply_process_items.update');
                Route::delete('itens/{supply_process_item}/destroy',[SupplyProcessItemsController::class,'destroy'])->name('supply_process_items.destroy');
        });

        Route::get('home', [HomeController::class, 'index'])->name('home');

    });

    //Rotas de Perfil do Usuário
    Route::resource('profile', ProfileController::class);    
});

//Rotas de Autenticação
Auth::routes(['verify' => true]);
