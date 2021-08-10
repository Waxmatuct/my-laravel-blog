<?php

namespace App\Http\Controllers;

use App\Services\BlogService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    protected $blogService;

    public function __construct(
        BlogService $blogService
    )

    {
        $this->blogService = $blogService;
    }

    public function blog()
    {
        $data = ([
            'posts' => $this->blogService->getAllOnlinePosts(),
            'categories' => $this->blogService->getAllCategoriesOrderedById(),
            'user' => Auth::user(),
            'comments' => $this->blogService->getAllComments(),
        ]);

        return view('blog.index', $data);
    }

    public function getPostsByCategory($slug)
    {
        $current_category = $this->blogService->getCurrentCategory($slug);

        $data = ([
            'posts' => $current_category->posts()->where('online', true)->orderBy('id', 'desc')->paginate(10),
            'categories' => $this->blogService->getAllCategories(),
            'tags' => $this->blogService->getAllTags(),
            'user' => Auth::user(),
            'current_category' => $current_category,
        ]);
        
        return view('blog.index_', $data );
    }

    public function getPost($slug_post)
    {
        $post = $this->blogService->getPostWithSlug($slug_post);

        if(Auth::guest() || !(Auth::user()->isAdmin)) {
            $post->increment('views');
        }
        
        if ($post->online) {

            $data = ([
                'post' => $post,
                'categories' => $this->blogService->getAllCategories(),
                'user' => Auth::user(),
                'comments' => $post->comments()->whereNotNull('online')->get(),
            ]);

            return view('blog.post', $data);
        }

        else {
            return redirect()->route('blog');
        }
        
    }

    public function getPostsByTag($slug)
    {
        $current_tag = $this->blogService->getCurrentTag($slug);

        $data = ([
            'posts' => $current_tag->posts()->where('online', true)->orderBy('id', 'desc')->paginate(10),
            'categories' => $this->blogService->getAllCategories(),
            'tags' => $this->blogService->getTagsOrderedByName(),
            'user' => Auth::user(),
            'current_tag' => $current_tag,
        ]);
        
        return view('blog.index_', $data);
    }

    public function online(Request $request, $id)
    {
        $post = $this->blogService->findPost($id);
        $post->online = $request->online;
        $post->save();

        if ($request->online) {
            return redirect()->route('posts.index')
            ->with('success', 'Пост «'.$post->title.'» включен');
        } else {
            return redirect()->route('posts.index')
            ->with('success', 'Пост «'.$post->title.'» выключен');
        }
    }

}