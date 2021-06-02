<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function storeComment(Request $request)
    {
        $request->validate([
            'username' => 'required|max:255',
            'comment' => 'required|min:5',
        ]);

        $comment = Comment::create([
            'username' => $request->get('username'),
            'comment' => $request->get('comment'),
            'website' => $request->get('website'),
            'post_id' => $request->get('post_id'),
        ]);
        
        // $slug_post = Post::where('id', $comment->post_id)->get('slug');
        $post = Post::where('id', $comment->post_id)->first();

        return redirect()->route('getPost', $post->slug)
            ->with('success', 'Комментарий успешно добавлен');
    }
}
