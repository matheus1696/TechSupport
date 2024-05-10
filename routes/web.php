<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Public\ContactListsController;
use App\Http\Controllers\Admin\Company\CompanyFinancialBlockController;
use App\Http\Controllers\Admin\Company\CompanyEstablishmentController;
use App\Http\Controllers\Admin\Company\CompanyEstablishmentDepartmentController;
use App\Http\Controllers\Admin\Company\CompanyOccupationController;
use App\Http\Controllers\Admin\Company\CompanyOrganizationController;
use App\Http\Controllers\Admin\Company\CompanyOrganizationLinkedUserController;
use App\Http\Controllers\Admin\Company\CompanyTypeEstablishmentController;
use App\Http\Controllers\Admin\Region\RegionCityController;
use App\Http\Controllers\Admin\Region\RegionCountryController;
use App\Http\Controllers\Admin\Region\RegionStateController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Product\ProductUnitController;
use App\Http\Controllers\Consumable\ConsumablesController;
use App\Http\Controllers\Consumable\ConsumableTypesController;
use App\Http\Controllers\Consumable\ConsumableUnitsController;
use App\Http\Controllers\Dashboard\Admin\DashboardController;
use App\Http\Controllers\Dashboard\ViewDashboardController;
use App\Http\Controllers\Inventory\InventoryController;
use App\Http\Controllers\Inventory\InventoryHistoryController;
use App\Http\Controllers\SupplyProcess\Admin\SupplyProcessStatusController;
use App\Http\Controllers\SupplyProcess\SupplyProcessController;
use App\Http\Controllers\SupplyProcess\SupplyProcessItemController;
use App\Http\Controllers\SupplyProcess\SupplyProcessOrganizationController;
use App\Http\Controllers\Ticket\Admin\TicketStatusController;
use App\Http\Controllers\Ticket\Admin\TicketTypeCategoryController;
use App\Http\Controllers\Ticket\Admin\TicketTypeServiceController;
use App\Http\Controllers\Ticket\Admin\TicketTypeSubServiceController;
use App\Http\Controllers\Ticket\TicketController;
use App\Http\Controllers\Users\Admin\UsersController;
use App\Http\Controllers\Users\ProfileController;

Route::get('/',function(){return view('index');});

//Lista Telefônica
Route::resource('contacts', ContactListsController::class);

//Camada de Seguraça para Usuários Logados
Route::middleware('auth')->group(function () {

    //Camada de Seguraça para Contas Verificadas
    Route::middleware(['verified'])->group(function () {        

        //Rota - Primeira Página
        Route::get('home', [HomeController::class, 'index'])->name('home');

        //Rotas Tickets
        Route::resource('tickets', TicketController::class);
    
        //Grupo de Rotas - Configuração de Dashbaord
        Route::prefix('dashboards')->group(function (){
            Route::resource('view_dashboards',ViewDashboardController::class);
        });

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

                //Rota - Dados do Organograma
                    Route::get('organizations/organize',[CompanyOrganizationController::class,'organize'])->name('organizations.organize');
                    Route::put('organizations/status/{organization}',[CompanyOrganizationController::class,'status'])->name('organizations.status');
                    Route::resource('organizations',CompanyOrganizationController::class);
                    
                    //Rota de Vinculação de Usuário com Organização
                    Route::resource('organization_linked_users',CompanyOrganizationLinkedUserController::class);
                    
                //Rota - Dados Ocupação (CBO)
                    Route::resource('occupations',CompanyOccupationController::class);
                //Rota - Dados Tipo de Estabelecimento
                    Route::resource('type_establishments',CompanyTypeEstablishmentController::class);
                //Rota - Dados Estabelecimento de Saúde 
                    Route::put('establishments/inventory/{establishment}',[CompanyEstablishmentController::class,'hasInventory'])->name('establishments.hasInventory');
                    Route::put('establishments/status/{establishment}',[CompanyEstablishmentController::class,'status'])->name('establishments.status');
                    Route::resource('establishments',CompanyEstablishmentController::class);
                //Rota - Dados do Contato Estabelecimento de Saúde
                    Route::resource('establishment_contacts',CompanyEstablishmentDepartmentController::class);
                //Rota - Nível de Atenção
                    Route::resource('financial_blocks',CompanyFinancialBlockController::class);

            });

            //Grupo de Rotas - Configuração de Localização
            Route::prefix('region')->group(function (){

                //Rota - Dados Paises
                    Route::put('countries/status/{country}',[RegionCountryController::class,'status'])->name('countries.status');
                    Route::resource('countries',RegionCountryController::class);
                //Rota - Dados Estados
                    Route::put('states/status/{state}',[RegionStateController::class,'status'])->name('states.status');
                    Route::resource('states',RegionStateController::class);
                //Rota - Dados Cidades
                    Route::put('cities/status/{city}',[RegionCityController::class,'status'])->name('cities.status');
                    Route::resource('cities',RegionCityController::class);

            });

            //Grupo de Rotas - Configuração de Produtos
            Route::prefix('products')->group(function (){

                //Rota - Dados dos Produtos
                    Route::put('products/status/{product}',[ProductController::class,'status'])->name('products.status');
                    Route::resource('products',ProductController::class);
                //Rota - Dados Unidade de Médida
                    Route::put('units/status/{unit}',[ProductUnitController::class,'status'])->name('units.status');
                    Route::resource('units',ProductUnitController::class);

            });            

            //Grupo de Rotas - Configuração de Dashbaord
            Route::prefix('dashboards')->group(function (){
                Route::put('dashboards/status/{dashboard}',[DashboardController::class,'status'])->name('dashboards.status');
                Route::resource('dashboards',DashboardController::class);
            });

            //Grupo de Rotas - Configuração do Ticket
            Route::prefix('ticket')->group(function (){
                
                //Rotas do Status do Ticket
                    Route::put('ticket_statuses/status/{ticket_status}',[TicketStatusController::class,'status'])->name('ticket_statuses.status');
                    Route::put('ticket_statuses/default/{ticket_status}',[TicketStatusController::class,'default'])->name('ticket_statuses.default');
                    Route::resource('ticket_statuses',TicketStatusController::class);

                //Rotas de Tipos de Categorias do Ticket
                    Route::put('ticket_type_categories/status/{ticket_type_category}',[TicketTypeCategoryController::class,'status'])->name('ticket_type_categories.status');
                    Route::resource('ticket_type_categories',TicketTypeCategoryController::class);
                
                //Rotas de Tipos de Serviços do Ticket
                    Route::put('ticket_type_services/status/{ticket_type_service}',[TicketTypeServiceController::class,'status'])->name('ticket_type_services.status');
                    Route::resource('ticket_type_services',TicketTypeServiceController::class);
                    
                //Rotas de Sub-Tipos de Serviços do Ticket
                    Route::put('ticket_type_sub_services/status/{ticket_type_sub_service}',[TicketTypeSubServiceController::class,'status'])->name('ticket_type_sub_services.status');
                    Route::resource('ticket_type_sub_services',TicketTypeSubServiceController::class);
                    
            });

            //Grupo de Rotas - Processos Licitatórios
            Route::prefix('supply_processes')->group(function (){

                //Grupo de Rotas - Configurações de Processos Licitatórios
                    Route::put('supply_processes/status/{supply_process}',[SupplyProcessController::class,'status'])->name('supply_processes.status');
                    Route::resource('supply_processes',SupplyProcessController::class);
                //Grupo de Rotas - Configurações dos Itens dos Processos Licitatórios
                    Route::get('{supply_process}/items/create/',[SupplyProcessItemController::class,'create'])->name('supply_process_items.create');
                    Route::post('items/store',[SupplyProcessItemController::class,'store'])->name('supply_process_items.store');
                    Route::get('itens/{supply_process_item}/edit',[SupplyProcessItemController::class,'edit'])->name('supply_process_items.edit');
                    Route::put('itens/{supply_process_item}/update',[SupplyProcessItemController::class,'update'])->name('supply_process_items.update');
                    Route::delete('itens/{supply_process_item}/destroy',[SupplyProcessItemController::class,'destroy'])->name('supply_process_items.destroy');

                    Route::put('supply_process_statuses/status/{supply_process_status}',[SupplyProcessStatusController::class,'status'])->name('supply_process_statuses.status');
                    Route::put('supply_process_statuses/default/{supply_process_status}',[SupplyProcessStatusController::class,'default'])->name('supply_process_statuses.default');
                    Route::resource('supply_process_statuses',SupplyProcessStatusController::class);

                    //Rota de Vinculação de Setor com Processos
                    Route::resource('supply_linked_organizations',SupplyProcessOrganizationController::class);
            });

            //Grupo de Rotas - Configuração de Localização
            Route::prefix('consumable')->group(function (){

                //Rota - Dados Paises
                    Route::resource('consumable_units',ConsumableUnitsController::class);
                //Rota - Dados Estados
                    Route::resource('consumable_types',ConsumableTypesController::class);
                //Rota - Dados Cidades
                    Route::put('consumables/{consumable}',[ConsumablesController::class,'status'])->name('consumables.status');
                    Route::resource('consumables',ConsumablesController::class);
            });
        });        

    });

            
    
        //Rotas de Inventário/Estoque
        Route::resource('inventories', InventoryController::class);
        Route::resource('inventory_histories', InventoryHistoryController::class);

    //Rotas de Perfil do Usuário
    Route::resource('profile', ProfileController::class);
});

//Rotas de Autenticação
Auth::routes(['verify' => true]);
