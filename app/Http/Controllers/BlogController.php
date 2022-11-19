<?php

namespace App\Http\Controllers;

use App\Services\BlogService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class BlogController extends Controller
{
    protected BlogService $blogService;

    public function __construct(
        BlogService $blogService
    ) {
        $this->blogService = $blogService;
    }

    /**
     * @return View
     */
    public function blog():View
    {
        $data = ([
            'posts' => $this->blogService->getAllOnlinePosts(),
            'categories' => $this->blogService->getAllCategoriesOrderedById(),
            'user' => Auth::user(),
            'comments' => $this->blogService->getAllComments(),
        ]);

        return view('blog.index', $data);
    }

    /**
     * @param $slug
     * @return View
     */
    public function getPostsByCategory($slug):View
    {
        $current_category = $this->blogService->getCurrentCategory($slug);

        $data = ([
            'posts' => $current_category->posts()->where('online', true)->orderBy('id', 'desc')->paginate(10),
            'categories' => $this->blogService->getAllCategories(),
            'tags' => $this->blogService->getAllTags(),
            'user' => Auth::user(),
            'current_category' => $current_category,
        ]);

        return view('blog.index_', $data);
    }

    /**
     * @param $slug_post
     * @return View|RedirectResponse
     */
    public function getPost($slug_post):View|RedirectResponse
    {
        $post = $this->blogService->getPostWithSlug($slug_post);

        if (Auth::guest() || !(Auth::user()->isAdmin)) {
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
        } else {
            return redirect()->route('blog');
        }
    }

    /**
     * @param $slug
     * @return View
     */
    public function getPostsByTag($slug):View
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

    /**
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function online(Request $request, $id): RedirectResponse
    {
        $post = $this->blogService->findPost($id);
        $post->online = $request->online;
        $post->save();

        if ($request->online) {
            return redirect()->route('posts.index')
                ->with('success', 'Пост «' . $post->title . '» включен');
        } else {
            return redirect()->route('posts.index')
                ->with('success', 'Пост «' . $post->title . '» выключен');
        }
    }
}
