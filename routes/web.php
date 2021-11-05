<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

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

Route::get("/pets", [UserController::class, 'index'])->name('index');
Route::get("/pets/create", [UserController::class, 'create'])->name('create');
Route::get("/pets/show/{pets}", [UserController::class, 'show'])->name('show');
Route::post('/pets/store', [UserController::class, 'store'])->name('store');
