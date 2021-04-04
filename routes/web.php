<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;

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

Route::get('/', [BlogController::class, 'index'])->name('index');
Route::get('/category/{slug}', [BlogController::class, 'getPostsByCategory'])->name('getPostsByCategory');
Route::get('/post/{slug_post}', [BlogController::class, 'getPost'])->name('getPost');
Route::get('/post/{slug_post}/edit', [BlogController::class, 'editPost'])->name('editPost');
Auth::routes();

Route::get('/home', [HomeController::class, 'home'])->name('home');

// Dashboard routes
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

// Dashboard posts
Route::get('/dashboard/posts', [App\Http\Controllers\Admin\PostController::class, 'index'])->name('dashboard-posts');
Route::resource('posts', App\Http\Controllers\Admin\PostController::class);
Route::get('/dashboard/new-post', [App\Http\Controllers\Admin\PostController::class, 'create'])->name('dashboard-new-post');

// Dashboard categories
Route::get('/dashboard/new-category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('dashboard-new-category');
Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class);

Route::get('/dashboard/blank', function () {
    return view('dashboard.blank');
})->name('dashboard-blank');
Route::get('/dashboard/calendar', function () {
    return view('dashboard.calendar');
})->name('dashboard-calendar');
Route::get('/dashboard/forms', function () {
    return view('dashboard.forms');
})->name('dashboard-forms');

Route::get('/dashboard/tabs', function () {
    return view('dashboard.tabs');
})->name('dashboard-tabs');
