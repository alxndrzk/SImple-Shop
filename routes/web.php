<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
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

Route::get('/test1', function () {
    return view('Test');
});



route::get('/test1', [TestController::class, 'getdate']);
route::get('/test1', [TestController::class, 'index']);
route::get('/post', [PostController::class, 'index'])->name('post.index');
route::get('/post/create', [PostController::class, 'create'])->name('post.create');
route::post('/post/store', [PostController::class, 'store'])->name('post.store');

Route::get('/home', function () {
    return view('home.index');
}) ->name('home.index');


// Route::get('/product', function () {
//     return view('products.index');
// }) ->name('products.index');



Route::get('/product',
[ProductController::class,'index'])->name('products.index')
;

Route::get('/product/create',
[ProductController::class,'create'])->name('products.create')
;

Route::post('/product/store',
[ProductController::class,'store'])->name('products.store')
;

Route::get('/product/edit/{id}',
[ProductController::class,'edit'])->name('products.edit')
;

Route::put('/product/update/{id}',
[ProductController::class,'update'])->name('products.update')
;