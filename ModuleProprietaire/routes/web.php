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

Route::get('/dashboard',[ProprietaireController::class,'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::resource('proprietaires', ProprietaireController::class)->middleware('auth');
Route::resource('proprietes', ProprieteController::class)->middleware('auth');
Route::resource('agences', AgenceController::class)->middleware('auth');
Route::resource('typeproprietaires', TypeproprietaireController::class)->middleware('auth');
Route::resource('typeproprietes', TypeproprieteController::class)->middleware('auth');
Route::post('/proprietaires/create',[ProprietaireController::class,'create'])->name('proprietaires.create');
Route::post('/proprietaires/update',[ProprietaireController::class,'modifier'])->name('proprietaires.modifier');
Route::get('/proprietaires/update/{proprietaire}',[ProprietaireController::class,'update'])->name('proprietaires.update');
Route::get('/proprietaires/delete/{proprietaire}',[ProprietaireController::class,'delete'])->name('proprietaires.delete');
Route::get('/proprietaires',[ProprietaireController::class,'index'])->name('proprietaires.index');
Route::post('/proprietaires/store',[ProprietaireController::class,'store']);
Route::get('/proprietes',[ProprieteController::class,'index']);
Route::post('/proprietes/create',[ProprieteController::class,'create']);
Route::get('/typeproprietaire/create',[TypeProprietaireController::class,'create']);
Route::get('/typeproprietaire/index',[TypeProprietaireController::class,'index']);


