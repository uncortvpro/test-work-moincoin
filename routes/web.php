<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/import/products',[\App\Http\Controllers\ImportController::class,'importProducts']);
Route::get('/import/categories',[\App\Http\Controllers\ImportController::class,'importCategories']);
