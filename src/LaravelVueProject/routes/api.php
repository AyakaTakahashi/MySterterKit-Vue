<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MenuController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// TODO
Route::get('/todos', [TodoController::class, 'index'])->name('todo.index'); 
Route::get('/todos/{todo}', [TodoController::class, 'detail'])->name('todo.detail'); 
Route::post('/todos', [TodoController::class, 'store'])->name('todo.store'); 
Route::put('/todos/{todo}', [TodoController::class, 'update'])->name('todo.update'); 
Route::delete('/todos/{todo}', [TodoController::class, 'delete'])->name('todo.delete'); 

// Customer
Route::get('/customers', [CustomerController::class, 'index'])->name('customer.index'); 
Route::get('/customers/{customer}', [CustomerController::class, 'detail'])->name('customer.detail'); 
Route::post('/customers', [CustomerController::class, 'store'])->name('customer.store'); 
Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customer.update'); 
Route::delete('/customers/{customer}', [CustomerController::class, 'delete'])->name('customer.delete'); 

// Menu
Route::get('/menus', [MenuController::class, 'index'])->name('menu.index'); 
Route::get('/menus/{menu}', [MenuController::class, 'detail'])->name('menu.detail'); 
Route::post('/menus', [MenuController::class, 'store'])->name('menu.store'); 
Route::put('/menus/{menu}', [MenuController::class, 'update'])->name('menu.update'); 
Route::delete('/menus/{menu}', [MenuController::class, 'delete'])->name('menu.delete'); 



// Sex
Route::get('/sex', [CustomerController::class, 'getSex']); 

