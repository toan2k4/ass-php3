<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->share('headCategories', Category::with('posts')->get());
        view()->share('tags', Tag::all());
        view()->share('newUpdate', Post::latest('created_at')->limit(5)->pluck('title', 'slug'));
    }
}
