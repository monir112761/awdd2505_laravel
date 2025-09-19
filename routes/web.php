<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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


// Admin panel Routes
Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/dashboard/all', [UserController::class, 'index']);
Route::get('/dashboard/all/add', [UserController::class, 'add']);
Route::get('/dashboard/all/edit', [UserController::class, 'edit']);
Route::get('/dashboard/all/view', [UserController::class, 'view']);


// User panel Routes
Route::get('/user', [UserController::class, 'index']);

require __DIR__.'/auth.php';
