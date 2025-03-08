<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedoresController;
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

se refere a um apelido da rota = name('site.index');
*/
Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobrenos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');

Route::get('/login',function() {
    return 'Login';
})->name('site.login');


Route::prefix('/app')->group(function () {
    Route::get('/clientes', fn () => 'Clientes')->name('app.clientes');
    Route::get('/fornecedores', [FornecedoresController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', fn () => 'Produtos')->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('site.teste');



//implementando redirecionamento de rotas
//Route::get('/rota2', function () {
//    echo 'Rota 2';
//    return redirect()->route('site.rota1');
//})->name('site.rota2');
   
//implementando redirecionamento de rotas para contigência de rotas inexistentes
route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para a página inicial';
});
/*
Lidando com parâmetros opcionais
Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem?}', function(string $nome, string $categoria, string $assunto, string $mensagem = null){    
    echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
});
*/

//Expressão regular (where) para limitar o tipo de dado que a rota aceita
//Route::get('/contato/{nome}/{categoria_id}', function(string $nome, int $categoria_id){    
//    echo "Estamos aqui: $nome - $categoria_id ";
//})->where('categoria_id', '[0-9]+') ->where('nome', '[A-Za-z]+');
