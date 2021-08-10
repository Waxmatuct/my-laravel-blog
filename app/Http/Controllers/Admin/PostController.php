<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogPost;
use App\Models\Post;
use App\Models\Tag;
use App\Services\BlogService;
use Illuminate\Support\Str;

class PostController extends Controller
{
    protected $blogService;

    public function __construct(
        BlogService $blogService
    )

    {
        $this->blogService = $blogService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts', [
            'posts' => $this->blogService->getAllPostsWithCategory(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::pluck('name', 'id');
        return view('dashboard.new-post', [
            'categories' => $this->blogService->getAllCategories(),
            'tags' => $tags,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogPost $request)
    {
        $request->validated();

        Post::create([
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
        $tags = Tag::pluck('name', 'id');
        return view('dashboard.edit-post', [
            'post' => $this->blogService->findPost($id),
            'categories' => $this->blogService->getAllCategories(),
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
    public function update(StoreBlogPost $request, $id)
    {
        $request->validated();

        $post = $this->blogService->findPost($id);
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
        $this->blogService->findPost($id)->delete();
        
        return redirect()->route('posts.index')
            ->with('success', 'Запись успешно удалена');
    }
}
