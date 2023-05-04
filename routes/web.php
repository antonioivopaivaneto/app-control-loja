<?php

use App\Http\Controllers\BalancoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComissaoController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\MovimentacaoController;
use App\Http\Controllers\ProdutoController;
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

Route::get('/',[LoginController::class,'index'])->name('/');
Route::post('login',[LoginController::class,'login'])->name('login');
Route::get('/loja',[LojaController::class,'index'] )->name('loja');
Route::get('/ajuda',[LojaController::class,'ajuda'] )->name('ajuda');
Route::get('/sair',[LoginController::class,'sair'])->name('sair');
Route::post('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'home'])->name('home.loja');
Route::post('/listar', [MovimentacaoController::class, 'listar'])->name('listar');
Route::resource('categoria', CategoriaController::class);
Route::resource('movimentacao', MovimentacaoController::class);


Route::resource('estoque', EstoqueController::class);
Route::resource('produto', ProdutoController::class);
Route::get('balanco', [BalancoController::class,'index'])->name('balanco');
Route::get('comissao', [ComissaoController::class,'index'])->name('comissao');
Route::post('comissao', [ComissaoController::class,'calcular'])->name('calcular');

