<?php

use App\Http\Controllers\LojaController;
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
    return view('app.login');
});

Route::get('/loja',[LojaController::class,'index'] )->name('loja');

Route::get('/home', function () {
    return view('app.home');
})->name('home');

Route::get('/produtos', function () {
    return view('app.produto');
});

