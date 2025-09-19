<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\incomeController;
use App\Http\Controllers\IncomeCategoryController;
use App\Http\Controllers\ExpenceController;
use App\Http\Controllers\ExpenceCategoryController;
/*
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


// User panel Routes
Route::get('/dashboard/user/all', [UserController::class, 'index']);
Route::get('/dashboard/user/add', [UserController::class, 'submit']);
Route::get('/dashboard/user/edit', [UserController::class, 'edit']);
Route::get('/dashboard/user/view', [UserController::class, 'view']);


// Income panel Routes
Route::get('/dashboard/income/all', [incomeController::class, 'index']);
Route::get('/dashboard/income/add', [incomeController::class, 'submit']);
Route::get('/dashboard/income/edit', [incomeController::class, 'edit']);
Route::get('/dashboard/income/view', [incomeController::class, 'view']);


// Income panel Routes
Route::get('/dashboard/income/category/all', [incomeCategoryController::class, 'index']);
Route::get('/dashboard/income/category/add', [incomeCategoryController::class, 'submit']);
Route::get('/dashboard/income/category/edit', [incomeCategoryController::class, 'edit']);
Route::get('/dashboard/income/category/view', [incomeCategoryController::class, 'view']);


// Expence panel Routes
Route::get('/dashboard/expence/all', [ExpenceController::class, 'index']);
Route::get('/dashboard/expence/add', [ExpenceController::class, 'submit']);
Route::get('/dashboard/expence/edit', [ExpenceController::class, 'edit']);
Route::get('/dashboard/expence/view', [ExpenceController::class, 'view']);


// Expence panel Routes
Route::get('/dashboard/expence/category/all', [ExpenceCategoryController::class, 'index']);
Route::get('/dashboard/expence/category/add', [ExpenceCategoryController::class, 'submit']);
Route::get('/dashboard/expence/category/edit', [ExpenceCategoryController::class, 'edit']);
Route::get('/dashboard/expence/category/view', [ExpenceCategoryController::class, 'view']);


// User panel Routes
// Route::get('/user', [UserController::class, 'index']);

require __DIR__.'/auth.php';
