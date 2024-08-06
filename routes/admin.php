<?php
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    ->as('admin.')
    ->middleware(['isAdmin', 'verified'])
    ->group(function () {

        Route::get('/', function () {
            return view('admin.dashboard');
        });

        // categories
        Route::prefix('categories')
            ->as('categories.')
            ->group(function () {
            Route::get('/', [CategoryController::class, 'index'])->name('index');
            Route::get('/create', [CategoryController::class, 'create'])->name('create');
            Route::post('/', [CategoryController::class, 'store'])->name('store');
            Route::get('/{id}', [CategoryController::class, 'show'])->name('show');
            Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('edit');
            Route::put('/{id}', [CategoryController::class, 'update'])->name('update');
            Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
        });


        // posts
        Route::prefix('posts')
            ->as('posts.')
            ->group(function () {
            Route::get('/', [PostController::class, 'index'])->name('index');
            Route::get('/create', [PostController::class, 'create'])->name('create');
            Route::post('/', [PostController::class, 'store'])->name('store');
            Route::get('/{id}', [PostController::class, 'show'])->name('show');
            Route::get('/{id}/edit', [PostController::class, 'edit'])->name('edit');
            Route::put('/{id}', [PostController::class, 'update'])->name('update');
            Route::delete('/{id}', [PostController::class, 'destroy'])->name('destroy');
        });

        // tags
        Route::prefix('tags')
            ->as('tags.')
            ->group(function () {
            Route::get('/', [TagController::class, 'index'])->name('index');
            Route::get('/create', [TagController::class, 'create'])->name('create');
            Route::post('/', [TagController::class, 'store'])->name('store');
            Route::get('/{id}', [TagController::class, 'show'])->name('show');
            Route::get('/{id}/edit', [TagController::class, 'edit'])->name('edit');
            Route::put('/{id}', [TagController::class, 'update'])->name('update');
            Route::delete('/{id}', [TagController::class, 'destroy'])->name('destroy');
        });

        // users
        Route::prefix('users')
            ->as('users.')
            ->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('index');
            Route::get('/create', [UserController::class, 'create'])->name('create');
            Route::post('/', [UserController::class, 'store'])->name('store');
            Route::get('/{id}', [UserController::class, 'show'])->name('show');
            Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit');
            Route::put('/{id}', [UserController::class, 'update'])->name('update');
            Route::delete('/{id}', [UserController::class, 'destroy'])->name('destroy');
        });

    });