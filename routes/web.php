<?php

use App\Http\Controllers\BalancoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComissaoController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\MovimentacaoController;
use App\Http\Controllers\PagamentoController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
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

URL::forceScheme('https');

Route::get('/',[LoginController::class,'index'])->name('/');
Route::post('login',[LoginController::class,'login'])->name('login');
Route::get('/loja',[LojaController::class,'index'] )->name('loja')->middleware('auth');
Route::get('/ajuda',[LojaController::class,'ajuda'] )->name('ajuda')->middleware('auth');
Route::get('/sair',[LoginController::class,'sair'])->name('sair')->middleware('auth');
Route::post('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/home', [HomeController::class, 'home'])->name('home.loja')->middleware('auth');
Route::post('/listar', [MovimentacaoController::class, 'listar'])->name('listar')->middleware('auth');
Route::resource('categoria', CategoriaController::class)->middleware('auth');
Route::resource('movimentacao', MovimentacaoController::class)->middleware('auth');


Route::resource('estoque', EstoqueController::class)->middleware('auth');
Route::resource('produto', ProdutoController::class)->middleware('auth');
Route::get('balanco', [BalancoController::class,'index'])->name('balanco')->middleware('auth');
Route::get('comissao', [ComissaoController::class,'index'])->name('comissao')->middleware('auth');
Route::post('comissao', [ComissaoController::class,'calcular'])->name('calcular')->middleware('auth');
Route::get('pagamento', [PagamentoController::class,'index'])->name('pagamento')->middleware('auth');

