<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentResource;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SettingResource;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\StoreImageController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/blog/category/{slug}', [BlogController::class, 'getPostsByCategory'])->name('getPostsByCategory');
Route::get('/blog/tag/{slug}', [BlogController::class, 'getPostsByTag'])->name('getPostsByTag');
Route::get('/blog/post/{slug_post}', [BlogController::class, 'getPost'])->name('getPost');
Route::post('/blog/post/{slug_post}/comment', [CommentController::class, 'storeComment'])->name('storeComment');

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::middleware(['isAdmin'])->group(function () {

    // Dashboard routes
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');

    // Dashboard posts
    Route::resource('/dashboard/posts', PostController::class);

    // Dashboard categories
    Route::resource('/dashboard/categories', CategoryController::class);

    // Dashboard tags
    Route::resource('/dashboard/tags', TagController::class);

    // Dashboard settings
    Route::resource('/dashboard/settings', SettingResource::class);

    // Dashboard Comments
    Route::resource('/dashboard/comments', CommentResource::class);

    Route::patch('/dashboard/posts/online/{id}', [BlogController::class, 'online'])->name('online');

    Route::patch('/dashboard/comments/online/{id}', [CommentController::class, 'onlineComment'])->name('onlineComment');

    Route::get('/dashboard/blank', function () {
        return view('dashboard.blank');
    })->name('dashboard-blank');
    Route::get('/dashboard/calendar', function () {
        return view('dashboard.calendar');
    })->name('dashboard-calendar');
    Route::get('/dashboard/forms', function () {
        return view('dashboard.forms');
    })->name('dashboard-forms');

    Route::get('/notes/{year}-{month}', [NoteController::class, 'older_notes']);
    Route::resource('/notes', NoteController::class);

    Route::post('/image/upload', StoreImageController::class)->name('storeImage');
});
