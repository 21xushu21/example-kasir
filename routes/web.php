<?php

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SidebarController;
use Faker\Guesser\Name;
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

/* Sidebar */
Route::get('/home',[SidebarController::class,'Index'])->name('index');

/* kontak */
Route::get('/customer',[CustomersController::class,'Customer'])->name('customer');
Route::get('/create_customer',[CustomersController::class,'CreateCustomer'])->name('createcustomer');
Route::post('/store_customer',[CustomersController::class,'StoreCustomer'])->name('StoreCustomer');
Route::get('/customer/{id}/edit', [CustomersController::class,'Edit'])->name('edit');;
Route::put('/customer/{id}', [CustomersController::class,'update']);
Route::delete('/customer/{id}', [CustomersController::class,'Destroy'])->name('destroy');

/* pruduk */
Route::get('/produk',[ProdukController::class,'Produk'])->name('produk');
Route::get('/create_produk',[ProdukController::class,'CreateProduk'])->name('createproduk');
