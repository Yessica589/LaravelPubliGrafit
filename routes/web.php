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

Route::get('/', [App\Http\Controllers\LandingController::class, 'index']);

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

Route::get(uri: '/proveedor', action:  [App\Http\Controllers\ProveedorController::class, 'index'])->name( name: 'proveedor.index');
Route::get(uri: '/proveedor/create', action:  [App\Http\Controllers\ProveedorController::class, 'create'])->name( name: 'proveedor.create');
Route::post(uri: '/proveedor', action:  [App\Http\Controllers\ProveedorController::class, 'store'])->name( name: 'proveedor.store');
Route::get(uri: '/proveedor/{proveedor}', action:  [App\Http\Controllers\ProveedorController::class, 'show'])->name( name: 'proveedor.show');
Route::get(uri: '/proveedor/{proveedor}/edit', action:  [App\Http\Controllers\ProveedorController::class, 'edit'])->name( name: 'proveedor.edit');
Route::put(uri: '/proveedor/{proveedor}', action:  [App\Http\Controllers\ProveedorController::class, 'update'])->name( name: 'proveedor.update');

Route::get(uri: '/productoterminado', action:  [App\Http\Controllers\ProductoTerminadoController::class, 'index'])->name( name: 'productoterminado.index');
Route::get(uri: '/productoterminado/create', action:  [App\Http\Controllers\ProductoTerminadoController::class, 'create'])->name( name: 'productoterminado.create');
Route::post(uri: '/productoterminado', action:  [App\Http\Controllers\ProductoTerminadoController::class, 'store'])->name( name: 'productoterminado.store');
Route::get(uri: '/productoterminado/{productoterminado}/edit', action:  [App\Http\Controllers\ProductoTerminadoController::class, 'edit'])->name( name: 'productoterminado.edit');
Route::put(uri: '/productoterminado/{productoterminado}', action:  [App\Http\Controllers\ProductoTerminadoController::class, 'update'])->name( name: 'productoterminado.update');

Route::get(uri: '/fichainsumo', action:  [App\Http\Controllers\FichaInsumoController::class, 'index'])->name( name: 'fichainsumo.index');
Route::get(uri: '/fichainsumo/create', action:  [App\Http\Controllers\FichaInsumoController::class, 'create'])->name( name: 'fichainsumo.create');
Route::post(uri: '/fichainsumo', action:  [App\Http\Controllers\FichaInsumoController::class, 'store'])->name( name: 'fichainsumo.store');
Route::get(uri: '/fichainsumo/{fichainsumo}/showInsumo', action:  [App\Http\Controllers\FichaInsumoController::class, 'showInsumo'])->name( name: 'fichainsumo.showInsumo');
// Route::post(uri: '/fichainsumo', action:  [App\Http\Controllers\FichaInsumoController::class, 'listar'])->name( name: 'fichainsumo.store');


Route::get(uri: '/ventaproducto', action:  [App\Http\Controllers\VentaProductoController::class, 'index'])->name( name: 'ventaproducto.index');
Route::get(uri: '/ventaproducto/create', action:  [App\Http\Controllers\VentaProductoController::class, 'create'])->name( name: 'ventaproducto.create');
Route::post(uri: '/ventaproducto', action:  [App\Http\Controllers\VentaProductoController::class, 'store'])->name( name: 'ventaproducto.store');
Route::get(uri: '/ventaproducto/{ventaproducto}/showProducto', action:  [App\Http\Controllers\VentaProductoController::class, 'showProducto'])->name( name: 'ventaproducto.showProducto');


Route::get(uri: '/comprainsumo', action:  [App\Http\Controllers\CompraInsumoController::class, 'index'])->name( name: 'comprainsumo.index');