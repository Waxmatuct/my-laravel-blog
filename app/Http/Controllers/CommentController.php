<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function getComments($slug_post) {

        $comments = Comment::get();
        $post = Post::where('slug', $slug_post)->first();    
        
        return view('blog.post', [
            'post' => $post,
            'comments' => $comments,
        ]);
    }
}
