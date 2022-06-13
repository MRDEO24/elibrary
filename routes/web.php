<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\IndexController;
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

Route::match(['get'], '/', [IndexController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/allbook', [IndexController::class, 'allbook'])->name('allbook');
Route::get('/dashboard', [IndexController::class, 'dashboard'])->name('dashboard');

Route::get('/detail/{id}', [IndexController::class, 'detail'])->name('detail');
Route::match(['get','post'],'/add', [IndexController::class, 'add'])->name('add');
Route::match(['get','post'],'/edit/{id}', [IndexController::class, 'edit'])->name('edit');
Route::match(['get','post'],'/hapus/{id}', [IndexController::class, 'hapus'])->name('hapus');
