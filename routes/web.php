<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
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

// Route::get('/login', function () {
//     return view('login');
// });

Route::post('/users', [UserController::class, 'store']);
Route::get('/login', [UserController::class, 'index']);
Route::post('/login-form', [UserController::class, 'login']);

Route::get('/account', [UserController::class, 'account'])->name('account');
Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions');


