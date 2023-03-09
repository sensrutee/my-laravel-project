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

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);
Route::get('/add', function(){
   return view('admin.add');
}) ->middleware('auth');//for incognito mode login means password secure

 Route::get('/show/{id}',[App\Http\Controllers\productController::class, 'show'])->middleware('auth');


Route::post('/add',[App\Http\Controllers\productController::class, 'store'])->middleware('auth');

Route::get('/allproduct',[App\Http\Controllers\productController::class, 'index'])->middleware('auth');
Route::get('/delete/{id}',[App\Http\Controllers\productController::class, 'delete'])->middleware('auth');
Route::get('/edit/{id}',[App\Http\Controllers\productController::class, 'edit'])->middleware('auth');
Route::post('/edit',[App\Http\Controllers\productController::class, 'update'])->middleware('auth');