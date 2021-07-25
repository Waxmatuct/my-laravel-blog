<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->with('category')->paginate(10);

        return view('dashboard.posts', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $posts = Post::all();
        $tags = Tag::all();
        return view('dashboard.new-post', [
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'category_id' => 'required',
            'description' => 'required|min:10',
            'content' => 'required|min:100',
            'slug' => 'required',
        ]);

        $post = Post::create([
            'title' => $request->get('title'),
            'category_id' => $request->get('category_id'),
            'description' => $request->get('description'),
            'content' => $request->get('content'),
            'slug' => Str::slug($request->get('slug')),
            'online' => $request->get('online'),
            'image' => $request->get('image'),
        ])->tags()->attach($request->tags);

        return redirect()->route('posts.index')
            ->with('success', 'Пост успешно добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $post = Post::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('dashboard.edit-post', [
            'post' => $post,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'category_id' => 'required',
            'description' => 'required|min:10',
            'content' => 'required|min:100',
            'slug' => 'required',
        ]);

        $post = Post::find($id);
        $post->title = $request->get('title');
        $post->category_id = $request->get('category_id');
        $post->description = $request->get('description');
        $post->content = $request->get('content');
        $post->slug = Str::slug($request->get('slug'));
        $post->image = $request->get('image');
        $post->tags()->sync($request->tags);
        $post->save();

        return redirect()->route('posts.index')
        ->with('success', 'Пост успешно отредактирован');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index')
            ->with('success', 'Запись успешно удалена');
    }
}
