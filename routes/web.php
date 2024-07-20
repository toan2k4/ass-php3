<?php

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



Auth::routes();

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('posts/category/{id}', [PostController::class, 'listPostCategory'])->name('posts.category.list');
Route::get('post/detail/{slug}', [PostController::class, 'detailPost'])->name('post.detail');
Route::post('posts/search', [PostController::class, 'searchPost'])->name('posts.search');
Route::get('/login', function (){
    return view('client.login');
});

