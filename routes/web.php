<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColegioController;
use App\Http\Controllers\PracticanteController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\TalleristaController;
use App\Http\Controllers\AsocajaController;
use App\Http\Controllers\FilboArtistaController;
use App\Http\Controllers\PatrocinioController;
use App\Http\Controllers\MultinacionalController;
use App\Http\Controllers\TeampomboController;
use App\Http\Controllers\MedioController;
use App\Http\Controllers\Admin\UserControl;
use App\http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DirectivoController;

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

Auth::routes(["register" => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');


//Route::resource('register', RegisterController::class);



Route::resource('users', UserControl::class)->names('admin.users')->middleware('auth')->middleware('can:supersu');
Route::resource('colegio', ColegioController::class)->middleware('auth');
Route::resource('practicante', PracticanteController::class)->middleware('auth');
Route::resource('editorial', EditorialController::class)->middleware('auth');
Route::resource('tallerista', TalleristaController::class)->middleware('auth');
Route::resource('asocaja', AsocajaController::class)->middleware('auth');
Route::resource('filbo_artista',FilboArtistaController::class)->middleware('auth');
Route::resource('patrocinio', PatrocinioController::class)->middleware('auth');
Route::resource('multinacional', MultinacionalController::class)->middleware('auth');
Route::resource('teampombo',TeampomboController::class)->middleware('auth');
Route::resource('medio', MedioController::class)->middleware('auth');
Route::resource('directivo', DirectivoController::class)->middleware('auth');