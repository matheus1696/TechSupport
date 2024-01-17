<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Public\ContactListsController;
use App\Http\Controllers\Users\Profile\ProfileController;
use App\Http\Controllers\Admin\Users\UsersController;
use App\Http\Controllers\Admin\Users\UserSexualOrientationsController;
use App\Http\Controllers\Admin\Company\CompanyAttentionLevelsController;
use App\Http\Controllers\Admin\Company\CompanyEstablishmentsController;
use App\Http\Controllers\Admin\Company\CompanyEstablishmentContactsController;
use App\Http\Controllers\Admin\Company\CompanyOccupationController;
use App\Http\Controllers\Admin\Company\CompanyOrganizationalController;
use App\Http\Controllers\Admin\Company\CompanyTypeEstablishmentsController;
use App\Http\Controllers\Admin\Region\RegionCitiesController;
use App\Http\Controllers\Admin\Region\RegionCountriesController;
use App\Http\Controllers\Admin\Region\RegionStatesController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Product\ProductUnitController;
use App\Http\Controllers\Bidding\BiddingController;
use App\Http\Controllers\Bidding\BiddingItensController;

Route::get('/',function(){return view('index');});



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
                //Rota - Dados sobre Orientação Sexual
                Route::resource('sexualorientations',UserSexualOrientationsController::class);
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
                Route::get('establishments/{establishment}/contact',[CompanyEstablishmentContactsController::class,'index'])->name('establishments.contact.index');
                Route::post('establishments/contact',[CompanyEstablishmentContactsController::class,'store'])->name('establishments.contact.store');
                Route::get('establishments/{establishment}/contact/{contact}/edit',[CompanyEstablishmentContactsController::class,'edit'])->name('establishments.contact.edit');
                Route::put('establishments/contact/{contact}',[CompanyEstablishmentContactsController::class,'update'])->name('establishments.contact.update');
                Route::delete('establishments/contact/{contact}',[CompanyEstablishmentContactsController::class,'destroy'])->name('establishments.contact.destroy');
                //Rota - Nível de Atenção
                Route::resource('attentions',CompanyAttentionLevelsController::class);
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
        });

        //Grupo de Rotas - Processos Licitatórios
        Route::prefix('biddings')->group(function (){

            //Grupo de Rotas - Configurações de Processos Licitatórios
                Route::put('biddings/status/{bidding}',[BiddingController::class,'status'])->name('biddings.status');
                Route::resource('biddings',BiddingController::class);

            //Grupo de Rotas - Configurações dos Itens dos Processos Licitatórios
                Route::get('{bidding}/itens/create/',[BiddingItensController::class,'create'])->name('biddingItens.create');
                Route::post('itens/store',[BiddingItensController::class,'store'])->name('biddingItens.store');
                Route::get('itens/{biddingItem}/edit',[BiddingItensController::class,'edit'])->name('biddingItens.edit');
                Route::put('itens/{biddingItem}/update',[BiddingItensController::class,'update'])->name('biddingItens.update');
                Route::delete('itens/{biddingItem}/destroy',[BiddingItensController::class,'destroy'])->name('biddingItens.destroy');
        });

        Route::get('home', [HomeController::class, 'index'])->name('home');

    });

    //Rotas de Perfil do Usuário
    Route::resource('profile', ProfileController::class);
});

//Lista Telefônica
Route::get('/contact',[ContactListsController::class,'index'])->name('contact.index');

//Rotas de Autenticação
    Auth::routes(['verify' => true]);
