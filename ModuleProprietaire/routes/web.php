<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\ProprieteController;
use App\Http\Controllers\ProprietaireController;
use App\Http\Controllers\TypeProprieteController;
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
Route::resource('typeproprietaires', TypeProprietaireController::class)->middleware('auth');
Route::resource('typeproprietes', TypeProprieteController::class)->middleware('auth');
Route::post('/proprietaires/create',[ProprietaireController::class,'create']);
Route::get('/proprietaires',[ProprietaireController::class,'index']);
Route::get('/proprietes',[ProprieteController::class,'index']);
Route::post('/proprietes/create',[ProprieteController::class,'create']);
Route::get('/typeproprietaire/create',[TypeProprietaireController::class,'create']);

