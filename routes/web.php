<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;

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
Route::get('/posts/{slug_post}', [BlogController::class, 'getPost'])->name('getPost');
Route::get('/posts/{slug_post}/edit', [BlogController::class, 'editPost'])->name('editPost');
Auth::routes();

Route::get('/home', [HomeController::class, 'home'])->name('home');

// Dahboard routes
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');
Route::get('/dashboard/posts', [App\Http\Controllers\Admin\PostController::class, 'index'])->name('dashboard-posts');

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
