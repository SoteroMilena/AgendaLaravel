<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ContatoController;
use GuzzleHttp\Psr7\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return redirect('/telaInicio');
});

Route::get('/telaInicio', function () {
    return view('telaInicio');
});
Route::post('/validacao', [LoginController::class, 'validacao']);

Route::get('/telaLogin', function () {
    return view('telaLogin');
});
Route::post('/telaLogin', function (Request $request) {
    dd($request);
     return view('telaLogin');
});

Route::get('/telaCadastro', function () {
    return view('telaCadastro', ['contato' => null]);
});
Route::post('/telaCadastro', [ContatoController::class, 'store']);

Route::get('/telaPesquisa', function () {
    return view('telaPesquisa', ['contato' => null]);
});
Route::post('/telaPesquisa', [ContatoController::class, 'pesquisa']);

Route::get('/telaExcluir', function () {
    return view('telaExcluir');
});
Route::post('/telaExcluir', [ContatoController::class, 'excluir']);

// GET = Ler
// POST = Mandar
// UPDATE = Atualizar
// Delete = Deletar
// Verbos http
