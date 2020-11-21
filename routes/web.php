<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductLineController;
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

Route::get('/customers', [CustomerController::class, 'index'])->name('customers');

Route::get('/employees', [EmployeeController::class, 'index'])->name('employees');

Route::get('/offices', [OfficeController::class, 'index'])->name('offices');

Route::get('/orderdetails', [OrderDetailController::class, 'index'])->name('orderdetails');

Route::get('/orders', [OrderController::class, 'index'])->name('orders');

Route::get('/payments', [PaymentController::class, 'index'])->name('payments');

Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/productlines', [ProductLineController::class, 'index'])->name('productlines');
