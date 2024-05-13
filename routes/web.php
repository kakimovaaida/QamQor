<?php

use App\Http\Controllers\adm\RoleController;
use App\Http\Controllers\adm\UserController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LangController;



Route::get('/', function () {
    return redirect()->route('services.index');
});

Auth::routes();
Route::resource('services',ServiceController::class);
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/bankFund',[ServiceController::class, 'bankFund'])->name('sd.bankFund');
Route::get('/wantHelp',[ServiceController::class, 'wantHelp'])->name('want.Help');
Route::get('/wantToHelp',[ServiceController::class, 'wantToHelp'])->name('want.toHelp.php');
Route::get('/about',[ServiceController::class, 'about_us'])->name('about');
Route::get('/services/category/{category}',[ServiceController::class, 'ServicesByCat'])->name('services.category');
Route::get('/categories/type/{type}',[ServiceController::class, 'CatsByType'])->name('services.type');
Route::get('/types/typeCat/{typeCat}',[ServiceController::class, 'TypesByTypeCat'])->name('services.typeCat');
Route::post('/help/message',[ServiceController::class,'help_requests'])->name('help.requests');
Route::post('/join/team',[ServiceController::class,'employee'])->name('employee.requests');
Route::get('/lang/{lang}', [LangController::class, 'switchLang'] )->name('switch.lang');
Route::middleware(['auth'])->group(function () {
    Route::resource('services',ServiceController::class)->except('index','show');
    Route::resource('categories',\App\Http\Controllers\CategoryController::class);
});
Route::prefix('adm')->as('adm.')->middleware('hasrole:admin,moderator')->group(function (){

    Route::get('/users',[UserController::class,'index'])->name('users.index');
    Route::get('/users/search',[UserController::class,'index'])->name('users.search');
    Route::put('/users/{user}/ban',[UserController::class,'ban'])->name('users.ban');
    Route::put('/users/{user}/unban',[UserController::class,'unban'])->name('users.unban');
    Route::resource('requests',\App\Http\Controllers\adm\RequestController::class);
    Route::resource('employee',\App\Http\Controllers\adm\EmployeeController::class);

    Route::get('/roles',[RoleController::class,'index'])->name('roles.index');
    Route::get('/roles/create',[RoleController::class,'create'])->name('roles.create');
    Route::post('/roles/store',[RoleController::class,'store'])->name('roles.store');
    Route::delete('/roles/destroy/{role}',[RoleController::class,'destroy'])->name('roles.destroy');

});
