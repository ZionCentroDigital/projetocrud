<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/produto','App\Http\Controllers\ProdutosController@index');

Route::get('/produto/novo', 'App\Http\Controllers\ProdutosController@create')->name('novo');
Route::post('/produto/novo', 'App\Http\Controllers\ProdutosController@store')->name('registrar_produto');
Route::get('/produto/ver', 'App\Http\Controllers\ProdutosController@show')->name('ver');;
Route::get('/produto/editar/{id}', 'App\Http\Controllers\ProdutosController@edit')->name('edit');
Route::post('/produto/editar/{id}', 'App\Http\Controllers\ProdutosController@update')->name('alterar_produto');
Route::get('/produto/excluir/{id}', 'App\Http\Controllers\ProdutosController@destroy')->name('excluir_produto');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
