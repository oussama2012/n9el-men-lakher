<?php

use App\Http\Controllers\CrudModelController;
use Illuminate\Support\Facades\Route;

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
})->name('home');

Route::get('/index',[CrudModelController::class,'index'] )->name('index');
Route::get('/create',[CrudModelController::class,'create'] )->name('create');
Route::post('/store',[CrudModelController::class,'store'] )->name('store');
Route::get('/show/{id}',[CrudModelController::class,'show'] )->name('show');
Route::delete('/delete/{id}',[CrudModelController::class,'delete'] )->name('delete');
Route::get('/edit/{id}',[CrudModelController::class,'edit'] )->name('edit');
Route::put('/update/{id}',[CrudModelController::class,'update'] )->name('update');