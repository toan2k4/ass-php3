<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function listPostCategory($id)
    {
        $posts = Post::where('category_id', $id)->get();

        return view('client.list-post', compact('posts'));
    }


    public function fetchArticlesByType($type)
    {
        $posts = Post::where($type, true)->paginate(5);
        // dd($posts);
        return view('client.list-post', compact('posts'));
    }


    public function fetchArticlesByTag($id)
    {
        $tags = Tag::findOrFail($id);
        $posts = $tags->posts()->paginate(5);
        return view('client.list-post', compact('posts'));
    }


    public function searchPost(Request $request)
    {
        $string = $_GET['search'];
        $posts = Post::whereAny([
            'title',
        ], 'LIKE', '%'.$string.'%')->paginate(5);

        
        return view('client.list-post', compact('posts'));
    }

    public function detailPost($slug)
    {
        $post = Post::with('category', 'tags', 'comments')->where('slug', $slug)->first();
        $post->increment('views');
        $postCategory = Post::where('category_id', $post->category_id)->where('id', '<>', $post->id)->limit(2)->get();
        return view('client.detail-post', compact('post', 'postCategory'));
    }
}
