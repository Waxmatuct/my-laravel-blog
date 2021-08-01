<?php

namespace App\Repositories\Posts;

use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    public function all()
    {
        return Post::all();
    }

    public function findPost($id)
    {
        return Post::find($id);
    }

    public function getAllOnlinePosts()
    {
        return Post::with('category')->where('online', true)->orderBy('id', 'desc');
    }

    public function getPost($slug_post)
    {
        return Post::where('slug', $slug_post)->first();
    }

    public function getAllPostsWithCategory() 
    {
        return Post::with('category')->orderBy('id', 'desc');
    }
}