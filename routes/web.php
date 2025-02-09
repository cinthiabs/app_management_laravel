<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
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
/*
Route::get('/', function () {
    return 'Olá, mundo!';
});

Route::get('/sobrenos', function () {
    return 'Sobre-nós';
});

Route::get('/contato', function () {
    return 'Contato';
});

*/
Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/sobrenos', [SobreNosController::class, 'sobreNos']);

Route::get('/contato', [ContatoController::class, 'contato']);

