<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Setting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $categories = Category::orderBy('title')->get();
        $posts = Post::where('online', true)->orderBy('id', 'desc')->paginate(7);
        $user = \Auth::user();
        
        return view('index', [
            'posts' => $posts,
            'categories' => $categories,
            'user' => $user,
        ]);
    }
}
