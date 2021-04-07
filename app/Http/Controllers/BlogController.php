<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $categories = Category::orderBy('title')->get();
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('index', [
            'posts' => $posts,
            'categories' => $categories
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
            'posts' => $current_category->posts()->paginate(10),
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }

    public function getPost($slug_post) {
        $categories = Category::get();
        $post = Post::where('slug', $slug_post)->first();
        return view('post', [
            'post' => $post,
            'categories' => $categories,
        ]);
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
            'posts' => $current_tag->posts()->paginate(4),
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }
}