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

Route::get("/pet", [UserController::class, 'index'])->name('index');
Route::get("/pet/create", [UserController::class, 'create'])->name('create');
Route::get("/pet/show/{pet}", [UserController::class, 'show'])->name('show');
