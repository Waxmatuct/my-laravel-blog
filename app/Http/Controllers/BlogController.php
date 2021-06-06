<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Comment;
use App\Models\Setting;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog() {
        $categories = Category::orderBy('title')->get();
        $posts = Post::where('online', true)->orderBy('id', 'desc')->paginate(7);
        $site_name = Setting::select(['id','option'])->find(1);
        $site_description = Setting::select(['id','option'])->find(2);
        $site_footer = Setting::select(['id','option'])->find(3);
        $comments = Comment::get();
        $user = \Auth::user();
        
        return view('blog.index', [
            'posts' => $posts,
            'categories' => $categories,
            'site_name' => $site_name->option,
            'site_description' => $site_description->option,
            'site_footer' => $site_footer->option,
            'user' => $user,
            'comments' => $comments,
        ]);
    }

    public function getCategories() {
        $categories = Category::orderBy('id', 'asc')->get();

        return view('includes.navigation', [
            'categories' => $categories,
        ]);
    }

    public function getPostsByCategory($slug) {
        $categories = Category::orderBy('title')->get();
        $tags = Tag::all();
        $current_category = Category::where('slug', $slug)->first();
        $site_name = Setting::select(['id','option'])->find(1);
        $site_description = Setting::select(['id','option'])->find(2);
        $site_footer = Setting::select(['id','option'])->find(3);
        $user = \Auth::user();
        
        return view('blog.index_', [
            'posts' => $current_category->posts()->where('online', true)->orderBy('id', 'desc')->paginate(10),
            'categories' => $categories,
            'tags' => $tags,
            'site_name' => $site_name->option,
            'site_description' => $site_description->option,
            'site_footer' => $site_footer->option,
            'user' => $user,
            'current_category' => $current_category,

        ]);
    }

    public function getPost($slug_post) {
        
        $categories = Category::get();
        $post = Post::where('slug', $slug_post)->first();
        $site_name = Setting::select(['id','option'])->find(1);
        $site_description = Setting::select(['id','option'])->find(2);
        $site_footer = Setting::select(['id','option'])->find(3);
        $comments = Comment::get();
        $user = \Auth::user();
        
            if(\Auth::guest() || !(\Auth::user()->isAdmin)) {
                $post->increment('views');
            }
        
            if ($post->online) {
                return view('blog.post', [
                    'post' => $post,
                    'categories' => $categories,
                    'site_name' => $site_name->option,
                    'site_description' => $site_description->option,
                    'site_footer' => $site_footer->option,
                    'user' => $user,
                    'comments' => $comments,

                ]);
            }

            else {
                return redirect()->route('blog');
            }
        
    }

    public function getPostsByTag($slug) {
        $tags = Tag::orderBy('name')->get();
        $categories = Category::all();
        $current_tag = Tag::where('slug', $slug)->first();
        $site_name = Setting::select(['id','option'])->find(1);
        $site_description = Setting::select(['id','option'])->find(2);
        $site_footer = Setting::select(['id','option'])->find(3);
        $user = \Auth::user();
        
        return view('blog.index_', [
            'posts' => $current_tag->posts()->where('online', true)->orderBy('id', 'desc')->paginate(10),
            'categories' => $categories,
            'tags' => $tags,
            'site_name' => $site_name->option,
            'site_description' => $site_description->option,
            'site_footer' => $site_footer->option,
            'user' => $user,
            'current_tag' => $current_tag,

        ]);
    }

    public function online(Request $request, $id)
    {
        $post = Post::find($id);
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