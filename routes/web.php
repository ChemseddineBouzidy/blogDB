<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Test;

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
    return view('post.allblogs');
});

// createblog
Route::get('/post/createblog', [BlogController::class, 'createblog'])->name('post.createblog');
Route::post('/post/storeblog', [BlogController::class, 'storeblog'])->name('post.storeblog');

// Show login form
Route::get('/login', [AuthController::class, 'show'])->name('login');
// Handle login
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// createcategory
Route::get('/post/createcategory', [CategoryController::class, 'createcategory'])->name('post.createcategory');
Route::post('/post/storecategory', [CategoryController::class, 'storecategory'])->name('post.storecategory');

// Route to display all data
Route::get('/post/Blogs', [BlogController::class,'index'])->name('post.allblogs');
Route::get('/', [BlogController::class,'index'])->name('post.allblogs');

// Route to display details data
Route::get('/post/{Blog}', [BlogController::class,'show'])
->where('id','\d+')  //only int on id
->name('post.show');


// Test
Route::get('/admin', function () {
    return view('dashbord');
})->name('dashbord');;


