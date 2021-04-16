<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Setting;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $categories = Category::orderBy('title')->get();
        $posts = Post::where('online', true)->orderBy('id', 'desc')->paginate(10);
        $site_name = Setting::where('name', 'site_name')->get();
        $site_description = Setting::where('name', 'site_description')->get();
        $site_footer = Setting::where('name', 'site_footer')->get();
        return view('index', [
            'posts' => $posts,
            'categories' => $categories,
            'site_name' => $site_name,
            'site_description' => $site_description,
            'site_footer' => $site_footer,

        ]);
    }

    public function getCategories() {
        $categories = Category::compact();
        return view('includes.navigation', [
            'categories' => $categories
        ]);
    }

    public function getPostsByCategory($slug) {
        $categories = Category::orderBy('title')->get();
        $tags = Tag::all();
        $current_category = Category::where('slug', $slug)->first();
        return view('index', [
            'posts' => $current_category->posts()->where('online', true)->orderBy('id', 'desc')->paginate(10),
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }

    public function getPost($slug_post) {
        
        $categories = Category::get();
        $post = Post::where('slug', $slug_post)->first();
        
            if ($post->online) {
                return view('post', [
                    'post' => $post,
                    'categories' => $categories,
                ]);
            }

            else {
                return redirect()->route('index');
            }
        
    }

    public function editPost($slug_post) {
        $post = Post::where('slug', $slug_post)->first();
        return view('edit_post', [
            'post' => $post
        ]);
    }

    public function getPostsByTag($slug) {
        $tags = Tag::orderBy('name')->get();
        $categories = Category::all();
        $current_tag = Tag::where('slug', $slug)->first();
        return view('index', [
            'posts' => $current_tag->posts()->where('online', true)->orderBy('id', 'desc')->paginate(10),
            'categories' => $categories,
            'tags' => $tags,
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