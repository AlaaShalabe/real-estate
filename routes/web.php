<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
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
    Route::get('/create', [LoginController::class, 'create']);
    Route::post('/store', [LoginController::class, 'store'])->name('auth.store');
    Route::get('/show', [LoginController::class, 'show']);
    Route::post('/login', [LoginController::class, 'login'])->name('auth.login');
    Route::post('/logou', [LoginController::class, 'logout'])->name('auth.logout');
});
Route::prefix('posts')->group(function () {
    Route::get('/create', [PostController::class, 'create']);
    Route::post('/store', [PostController::class, 'store'])->name('post.store');
});

Route::prefix('categories')->group(function () {
    Route::get('/index', [CategoryController::class, 'index']);
    Route::get('/create', [CategoryController::class, 'create']);
    Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/update/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/delet/{category}', [CategoryController::class, 'destroy'])->name('categories.delete');
});
