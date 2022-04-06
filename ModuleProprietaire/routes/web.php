<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\ProprieteController;
use App\Http\Controllers\ProprietaireController;
use App\Http\Controllers\TypeproprieteController;
use App\Http\Controllers\TypeProprietaireController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::resource('proprietaires', ProprietaireController::class)->middleware('auth');
Route::resource('proprietes', ProprieteController::class)->middleware('auth');
Route::resource('agences', AgenceController::class)->middleware('auth');
Route::resource('typeproprietaires', TypeproprietaireController::class)->middleware('auth');
Route::resource('typeproprietes', TypeproprieteController::class)->middleware('auth');
//route proprietaire
Route::get('/proprietaires',[ProprietaireController::class,'index']);
Route::post('/proprietaires/create',[ProprietaireController::class,'create']);
Route::get('/proprietaires/store',[ProprietaireController::class,'store']);
Route::get('/proprietaires',[ProprietaireController::class,'index'])->name('proprietaires.index');
Route::post('/proprietaires/store',[ProprietaireController::class,'store']);
Route::get('/proprietaires/show/{proprietaire}',[ProprietaireController::class,'show'])->name('proprietaires.show');
Route::post('/proprietaires/modifier',[ProprietaireController::class,'modifier'])->name('proprietaires.modifier');
Route::get('/proprietaires/update/{id}',[ProprietaireController::class,'update']);
Route::get('/proprietaires/delete/{proprietaire}',[ProprietaireController::class,'destroy']);


//route proprietes
Route::get('/proprietes',[ProprieteController::class,'index']);
Route::post('/proprietes/create',[ProprieteController::class,'create']);
//route type_proprietaire
Route::get('/typeproprietaire/index',[TypeproprietaireController::class,'index']);
Route::get('/typeproprietaire/create',[TypeProprietaireController::class,'create']);
//route type_propriete
Route::get('/typepropriete/create',[TypeproprieteController::class,'create']);
Route::get('/typepropriete/index',[TypeproprieteController::class,'index']);


