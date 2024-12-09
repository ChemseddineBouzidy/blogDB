<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
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
    return view('dashbord');
});

// createblog
Route::get('/post/createblog', [BlogController::class, 'createblog'])->name('post.createblog');
Route::get('/post/storeblog', [BlogController::class, 'storeblog'])->name('post.storeblog');


// createcategory
Route::get('/post/createcategory', [CategoryController::class, 'createcategory'])->name('post.createcategory');
Route::post('/post/storecategory', [CategoryController::class, 'storecategory'])->name('post.storecategory');
