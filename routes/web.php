<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RequestsController;
use App\Http\Controllers\UserController;
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
    return view('feedbackform');
});
Route::get('/signin', [UserController::class, 'index'])->name('signin');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/signin/authenticate', [UserController::class, 'authenticate'])->name('signin.authenticate');
Route::get('/requests', [RequestsController::class, 'store'])->name('requests.store');
Route::post('/requests/create', [RequestsController::class, 'create'])->name('requests.create');
Route::post('/requests/edit', [RequestsController::class, 'edit'])->name('requests.edit');
Route::post('/requests/destroy', [RequestsController::class, 'destroy'])->name('requests.destroy');
Route::post('/requests/update', [RequestsController::class, 'update'])->name('requests.update');
