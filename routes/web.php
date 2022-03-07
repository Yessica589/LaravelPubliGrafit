<?php

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
    return view('welcome');
});


Route::get( uri: '/home', action: [App\Http\Controllers\HomeController::class, 'index'])->name( name: 'home');

Route::get(uri: '/users/create', action:  [App\Http\Controllers\UserController::class, 'create'])->name( name: 'users.create');
Route::post(uri: '/users', action:  [App\Http\Controllers\UserController::class, 'store'])->name( name: 'users.store');
Route::get(uri: '/users', action:  [App\Http\Controllers\UserController::class, 'index'])->name( name: 'users.index');
Route::get(uri: '/users/{user}', action:  [App\Http\Controllers\UserController::class, 'show'])->name( name: 'users.show');
Route::get(uri: '/users/{user}/edit', action:  [App\Http\Controllers\UserController::class, 'edit'])->name( name: 'users.edit');
Route::put(uri: '/users/{user}', action:  [App\Http\Controllers\UserController::class, 'update'])->name( name: 'users.update');


Route::get(uri: '/categoriaproveedor', action:  [App\Http\Controllers\CategoriaProveedorController::class, 'index'])->name( name: 'categoriaproveedor.index');
Route::get(uri: '/categoriaproveedor/create', action:  [App\Http\Controllers\CategoriaProveedorController::class, 'create'])->name( name: 'categoriaproveedor.create');
Route::post(uri: '/categoriaproveedor', action:  [App\Http\Controllers\CategoriaProveedorController::class, 'store'])->name( name: 'categoriaproveedor.store');
Route::get(uri: '/categoriaproveedor/{categoriaproveedor}/edit', action:  [App\Http\Controllers\CategoriaProveedorController::class, 'edit'])->name( name: 'categoriaproveedor.edit');
Route::put(uri: '/categoriaproveedor/{categoriaproveedor}', action:  [App\Http\Controllers\CategoriaProveedorController::class, 'update'])->name( name: 'categoriaproveedor.update');

Route::get(uri: '/cliente', action:  [App\Http\Controllers\ClienteController::class, 'index'])->name( name: 'cliente.index');
Route::get(uri: '/cliente/create', action:  [App\Http\Controllers\ClienteController::class, 'create'])->name( name: 'cliente.create');
Route::post(uri: '/cliente', action:  [App\Http\Controllers\ClienteController::class, 'store'])->name( name: 'cliente.store');
Route::get(uri: '/cliente/{cliente}', action:  [App\Http\Controllers\ClienteController::class, 'show'])->name( name: 'cliente.show');
Route::get(uri: '/cliente/{cliente}/edit', action:  [App\Http\Controllers\ClienteController::class, 'edit'])->name( name: 'cliente.edit');
Route::put(uri: '/cliente/{cliente}', action:  [App\Http\Controllers\ClienteController::class, 'update'])->name( name: 'cliente.update');

Route::get(uri: '/controlinsumo', action:  [App\Http\Controllers\ControlInsumoController::class, 'index'])->name( name: 'controlinsumo.index');
Route::get(uri: '/controlinsumo/create', action:  [App\Http\Controllers\ControlInsumoController::class, 'create'])->name( name: 'controlinsumo.create');
Route::post(uri: '/controlinsumo', action:  [App\Http\Controllers\ControlInsumoController::class, 'store'])->name( name: 'controlinsumo.store');
Route::get(uri: '/controlinsumo/{controlinsumo}/edit', action:  [App\Http\Controllers\ControlInsumoController::class, 'edit'])->name( name: 'controlinsumo.edit');
Route::put(uri: '/controlinsumo/{controlinsumo}', action:  [App\Http\Controllers\ControlInsumoController::class, 'update'])->name( name: 'controlinsumo.update');
Route::get('/controlinsumo/cambiar/estado/{id}/{estado}', [App\Http\Controllers\ControlInsumoController::class, 'updateState']);