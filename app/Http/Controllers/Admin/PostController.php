<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\FacadesStorage;

class PostController extends Controller
{
    const PATH_VIEW = 'admin.posts.';
    const PATH_UPLOAD = 'posts';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('category')->latest()->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id')->all();
        $tags = Tag::pluck('name', 'id')->all();

        return view(self::PATH_VIEW . __FUNCTION__, compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'thumbnail' => 'required|file',
            'content' => 'required',
            'tags' => 'required',
        ]);


        $dataPost = $request->except(['tags', 'thumbnail']);
        $dataPost['is_status'] ??= 0;
        $dataPost['is_trending'] ??= 0;
        $dataPost['is_featured'] ??= 0;
        $dataPost['is_most_popular'] ??= 0;
        $dataPost['is_hot'] ??= 0;
        $dataPost['is_most_watched'] ??= 0;
        $dataPost['is_banner'] ??= 0;

        if ($request->hasFile('thumbnail')) {
            $dataPost['thumbnail'] = Storage::put(self::PATH_UPLOAD, $request->file('thumbnail'));
        }

        $dataTags = $request->tags;

        try {
            \DB::beginTransaction();

            $post = Post::create($dataPost);
            $post->tags()->attach($dataTags);
            \DB::commit();

            return redirect()
                ->route('admin.posts.index')
                ->with('success', 'Thao tác thành công!');
        } catch (\Exception $exception) {
            \DB::rollBack();
            if (Storage::exists($dataPost['thumbnail'])) {
                Storage::delete($dataPost['thumbnail']);
            }
            return back()->with('error', $exception->getMessage());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);

        return view(self::PATH_VIEW . __FUNCTION__, compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::pluck('name', 'id')->all();
        $tags = Tag::pluck('name', 'id')->all();
        return view(self::PATH_VIEW . __FUNCTION__, compact('categories', 'tags', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);
        $currentThumbnail = $post->thumbnail;

        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'tags' => 'required',
        ]);


        $dataPost = $request->except(['tags', 'thumbnail']);
        $dataPost['is_status'] ??= 0;
        $dataPost['is_trending'] ??= 0;
        $dataPost['is_featured'] ??= 0;
        $dataPost['is_most_popular'] ??= 0;
        $dataPost['is_hot'] ??= 0;
        $dataPost['is_most_watched'] ??= 0;
        $dataPost['is_banner'] ??= 0;

        if ($request->hasFile('thumbnail')) {
            $dataPost['thumbnail'] = Storage::put(self::PATH_UPLOAD, $request->file('thumbnail'));

            if (!empty($currentThumbnail) && Storage::exists($currentThumbnail)) {

                Storage::delete($currentThumbnail);
            }
        }

        $dataTags = $request->tags;

        try {
            \DB::beginTransaction();

            $post->update($dataPost);
            $post->tags()->sync($dataTags);
            \DB::commit();

            return back()
                ->with('success', 'Thao tác thành công!');
        } catch (\Exception $exception) {
            \DB::rollBack();
            if (Storage::exists($dataPost['thumbnail'])) {
                Storage::delete($dataPost['thumbnail']);
            }
            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $post = Post::findOrFail($id);

            DB::beginTransaction();

            $post->comments()->delete();
            $post->tags()->sync([]);
            $post->delete();

            DB::commit();

            return back()->with('success', 'You delete success');
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()->with('error', 'You delete error');
        }

    }
}
