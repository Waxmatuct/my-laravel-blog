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
        $site_name = Setting::select(['id','option'])->find(1);
        $site_description = Setting::select(['id','option'])->find(2);
        $site_footer = Setting::select(['id','option'])->find(3);
        $user = \Auth::user();
        
        return view('index', [
            'posts' => $posts,
            'categories' => $categories,
            'site_name' => $site_name->option,
            'site_description' => $site_description->option,
            'site_footer' => $site_footer->option,
            'user' => $user,
        ]);
    }
}
