<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $data = [];
        $data['banner'] = \DB::table('posts')
            ->select('posts.title','posts.id', 'posts.slug', 'posts.thumbnail', 'posts.created_at', 'categories.name as category_name')
            ->join('categories', 'categories.id', '=', 'posts.category_id')
            ->where('is_banner', '1')
            ->limit(4)->orderByDesc('posts.id')
            ->get()
            ->toArray();

        $categories = \DB::table('categories')->limit(5)->get();

        foreach ($categories as $category) {
            $data[$category->name] = \DB::table('posts')
                ->select('posts.title','posts.id', 'posts.slug', 'posts.thumbnail', 'posts.created_at', 'categories.name as category_name')
                ->join('categories', 'categories.id', '=', 'posts.category_id')
                ->where('categories.name', $category->name)
                ->limit(5)
                ->latest()
                ->get()
                ->toArray();
        }
        $titles = array_keys($data);
        $data = array_values($data);
        
        return view('client.home', compact('data', 'titles'));
    }
}
