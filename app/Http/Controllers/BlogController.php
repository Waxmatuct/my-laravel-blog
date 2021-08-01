<?php

namespace App\Http\Controllers;

// use App\Models\Category;
// use App\Models\Tag;
// use App\Models\Comment;
use Illuminate\Http\Request;
use App\Repositories\Posts\PostRepositoryInterface;
use App\Repositories\Categories\CategoryRepositoryInterface;
use App\Repositories\Comments\CommentRepositoryInterface;
use App\Repositories\Tags\TagRepositoryInterface;

class BlogController extends Controller
{
    private $postRepository;
    private $categoryRepository;
    private $commentRepository;
    private $tagRepository;
    
    public function __construct(
        PostRepositoryInterface $postRepository,
        CategoryRepositoryInterface $categoryRepository,
        CommentRepositoryInterface $commentRepository,
        TagRepositoryInterface $tagRepository,
    )

    {
        $this->postRepository = $postRepository;
        $this->categoryRepository = $categoryRepository;
        $this->commentRepository = $commentRepository;
        $this->tagRepository = $tagRepository;
    }


    public function blog()
    {
        $data = ([
            'posts' => $this->postRepository->getAllOnlinePosts()->paginate(5),
            'categories' => $this->categoryRepository->getCategories(),
            'user' => \Auth::user(),
            'comments' => $this->commentRepository->all(),
        ]);

        return view('blog.index', $data);
    }

    public function getPostsByCategory($slug)
    {
        $current_category = $this->categoryRepository->getCurrentCategory($slug);

        $data = ([
            'posts' => $current_category->posts()->where('online', true)->orderBy('id', 'desc')->paginate(10),
            'categories' => $this->categoryRepository->all(),
            'tags' => $this->tagRepository->all(),
            'user' => \Auth::user(),
            'current_category' => $current_category,
        ]);
        
        return view('blog.index_', $data );
    }

    public function getPost($slug_post)
    {
        $post = $this->postRepository->getPost($slug_post);
        
            if(\Auth::guest() || !(\Auth::user()->isAdmin)) {
                $post->increment('views');
            }
        
            if ($post->online) {

                $data = ([
                    'post' => $post,
                    'categories' => $this->categoryRepository->all(),
                    'user' => \Auth::user(),
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
        $current_tag = $this->tagRepository->getCurrentTag($slug);

        $data = ([
            'posts' => $current_tag->posts()->where('online', true)->orderBy('id', 'desc')->paginate(10),
            'categories' => $this->categoryRepository->all(),
            'tags' => $this->tagRepository->getTags(),
            'user' => \Auth::user(),
            'current_tag' => $current_tag,
        ]);
        
        return view('blog.index_', $data);
    }

    public function online(Request $request, $id)
    {
        $post = $this->postRepository->findPost($id);
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