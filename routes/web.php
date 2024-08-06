<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\SuccessController;
use App\Http\Controllers\Client\CategoryController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes(['logout' => false, 'verify' => true]);
Route::get('reset/success', [ResetPasswordController::class, 'resetSuccess'])->name('auth.reset.success');


Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['verified'])
    ->group(function () {
        Route::get('/', [HomeController::class, 'home'])->name('home');
        Route::get('posts/category/{id}', [PostController::class, 'listPostCategory'])->name('posts.category.list');
        Route::get('posts/type/{string}', [PostController::class, 'fetchArticlesByType'])->name('posts.type.list');
        Route::get('posts/tag/{id}', [PostController::class, 'fetchArticlesByTag'])->name('posts.tag.list');

        Route::get('post/detail/{slug}', [PostController::class, 'detailPost'])->name('post.detail');
        Route::get('posts/search', [PostController::class, 'searchPost'])->name('posts.search');
    });


