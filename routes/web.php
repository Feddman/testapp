<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\NewslettersController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', [PagesController::class, 'home']);
Route::get('/test', [PagesController::class, 'test']);

Route::resource('products', ProductsController::class);
Route::resource('categories', CategoriesController::class);

Route::post('/newsletter', [NewslettersController::class, 'store'])->name('newsletter.store');
