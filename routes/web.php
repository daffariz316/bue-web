<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\BiayaController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
//Login Route
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

//Signup Route
Route::get('/signup', [AuthController::class,'showSignupForm'])->name('signup');
Route::post('/signup', [AuthController::class,'signup'])->name('signup');

Route::get('/dashboard', [DashboardController::class, 'loadDashboard']);
Route::get('/dashboard/biaya',[DashboardController::class,'loadBiaya']);
Route::get('/dashboard/product',[DashboardController::class,'loadProducts']);
Route::get('/dashboard/category',[DashboardController::class,'loadCategories']);
Route::get('/dashboard/admin',[DashboardController::class,'loadAdmin']);
Route::get('/dashboard/cart',[DashboardController::class,'loadCart']);
//download pdf
// Route untuk menampilkan halaman biaya
Route::get('/biaya', [BiayaController::class, 'index'])->name('biaya.index');

// Route untuk mendownload PDF tunggal berdasarkan ID
Route::get('/biaya/download/{id}', [BiayaController::class, 'downloadPDF'])->name('download.pdf');

// Route untuk mendownload semua PDF
Route::get('/biaya/download-all', [BiayaController::class, 'downloadAllPDF'])->name('download.all.pdf');

//biaya
Route::get('/biaya', [BiayaController::class, 'index'])->name('index');
Route::get('/biaya/{id}/edit', [BiayaController::class, 'edit'])->name('biaya.edit');
Route::put('/biaya/{id}', [BiayaController::class, 'update'])->name('biaya.update');
Route::delete('/biaya/{id}', [BiayaController::class, 'delete'])->name('biaya.delete');
// Rute untuk menampilkan formulir penambahan data
Route::get('/biaya/create', [BiayaController::class, 'create'])->name('biaya.create');

// Rute untuk menangani permintaan POST dari formulir penambahan data
Route::post('/biaya', [BiayaController::class, 'store'])->name('biaya.store');
Route::get('/dashboard', [BiayaController::class, 'loadDashboard'])->name('dashboard');
Route::get('/download/filtered/pdf', [BiayaController::class, 'downloadFilteredPDF'])->name('download.filtered.pdf');


//product
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit',[ProductController::class, 'edit'])->name('product.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'delete'])->name('products.delete');


//category
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

//admin
Route::get('/admins', [adminController::class, 'index'])->name('admins.index');
Route::post('/admins', [AdminController::class, 'store'])->name('admins.store');
Route::get('/admins/{id}/edit', [AdminController::class, 'edit'])->name('admins.edit');
Route::put('/admins/{id}', [AdminController::class, 'update'])->name('admins.update');
Route::delete('/admins/{id}', [AdminController::class, 'destroy'])->name('admins.destroy');

//cart
Route::get('/carts', [CartController::class, 'index'])->name('carts.index');
Route::get('/carts/create', [CartController::class, 'create'])->name('carts.create');
Route::post('/carts', [CartController::class, 'store'])->name('carts.store');
Route::get('/carts/{id}/edit', [CartController::class, 'edit'])->name('carts.edit');
Route::put('/carts/{id}', [CartController::class, 'update'])->name('carts.update');
Route::delete('/carts/{id}', [CartController::class, 'destroy'])->name('carts.destroy');
