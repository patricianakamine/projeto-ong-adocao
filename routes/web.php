<?php

use App\Http\Controllers\Animais;
use App\Http\Controllers\Formularios;
use Illuminate\Support\Facades\Route;

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
    view('welcome');
});
Route::get('/animais',[Animais::class,'mostrarAnimais']);
Route::get('/formularios',[Formularios::class,'mostrarFormularios']);
Route::get('/animais/{especie}',[Animais::class,'mostrarAnimaisPorEspecie']);
Route::get('/animais/{raca}',[Animais::class,'mostrarAnimaisPorRaca']);
Route::get('/animais/{local}',[Animais::class,'mostrarAnimaisPorLocal']);
Route::get('/animais/{porte}',[Animais::class,'mostrarAnimaisPorPorte']);
Route::get('/animais/{genero}',[Animais::class,'mostrarAnimaisPorGenero']);
