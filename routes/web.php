<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Test;


route::name('post.')->prefix('post')->group(function () {
// create une blog
Route::get('/createblog', [BlogController::class, 'createblog'])->name('createblog');
Route::post('/storeblog', [BlogController::class, 'storeblog'])->name('storeblog');
// create une category
Route::get('/createcategory', [CategoryController::class, 'createcategory'])->name('createcategory');
Route::post('/storecategory', [CategoryController::class, 'storecategory'])->name('storecategory');
// Route to display all data
Route::get('/Blogs', [BlogController::class,'index'])->name('allblogs');
Route::get('/Blog/news', [BlogController::class,'news'])->name('news');
});



Route::get('/', [BlogController::class,'index'])->name('post.allblogs');
// Route to display details data
Route::get('/post/{Blog}', [BlogController::class,'show'])->where('id','\d+')  ->name('post.show');
// acceder a l'admin page
Route::get('/admin', function () {return view('dashbord');})->name('dashbord');;




















// Show login form
Route::get('/login', [AuthController::class, 'show'])->name('login');
// Handle login
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');