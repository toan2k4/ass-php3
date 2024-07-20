<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function listPostCategory($id){
        $posts = Post::where('category_id', $id)->get();
        
        return view('client.list-post', compact('posts'));
    }

    public function searchPost(Request $request){
        $string = $request->input('search');
        $posts = Post::where('title', 'like', "%$string%")->get();
        return view('client.list-post', compact('posts'));
    }

    public function detailPost($slug){
        $post = Post::with('category', 'tags', 'comments')->where('slug', $slug)->first();
        // dd($post);
        $postCategory = Post::where('category_id', $post->category_id)->where('id', '<>', $post->id)->limit(2)->get();
        return view('client.detail-post', compact('post', 'postCategory'));
    }
}
