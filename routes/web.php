<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

//Route::get('/products', [ProductsController::class,'index']);
//Route::get('/products','App\Http\Controllers\ProductsController@index');
//Route::get('/products/about','App\Http\Controllers\ProductsController@about');
//Product id
//Route::get('products/{name}', [ProductsController::class,'show']);

Route::get('/',[PagesController::class,'index']);
Route::get('/about',[PagesController::class,'about']);

//posts 
Route::get('/posts',[PostsController::class,'index']);