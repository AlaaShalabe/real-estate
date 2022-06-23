<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PageController::class, 'welcome']);
Route::prefix('users')->group(function () {
    // Route::get('/create', [LoginController::class, 'create']);
    // Route::post('/store', [LoginController::class, 'store'])->name('auth.store');
    Route::get('/login', [AuthController::class, 'show']);
    Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.login');
    Route::post('/logou', [AuthController::class, 'logout'])->name('auth.logout');
});
Route::prefix('posts')->group(function () {
    Route::get('/index', [PostController::class, 'index'])->name('post.index');
    Route::get('/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/edit/{post}/post', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/update/{post}', [PostController::class, 'update'])->name('post.update');
    Route::get('/show/{post}', [PostController::class, 'show'])->name('post.show');
    Route::delete('/delete/{post}', [PostController::class, 'destroy'])->name('post.delete');
});

Route::prefix('categories')->group(function () {
    Route::get('/index', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/show/{category}', [CategoryController::class, 'show'])->name('categories.show');
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/update/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/delet/{category}', [CategoryController::class, 'destroy'])->name('categories.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
