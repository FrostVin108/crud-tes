<?php

use Illuminate\Support\Facades\Route;
use App\Models\Account;
use App\Http\Controllers\AccountController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AccountController::class, 'index'])->name('account.index');

Route::delete('destroy/{id}', [AccountController::class, 'destroy'])->name('account.delete');

Route::get('create', [AccountController::class, 'create'])->name('account.create');

Route::post('/store', [AccountController::class, 'store'])->name('account.store');