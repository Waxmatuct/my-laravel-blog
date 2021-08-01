<?php

namespace App\Repositories\Comments;

use App\Models\Comment;

class CommentRepository implements CommentRepositoryInterface
{
    public function all()
    {
        return Comment::all();
    }

    public function getComments()
    {
        return Comment::orderBy('id', 'desc');
    }

    public function findComment($id)
    {
        return Comment::find($id);
    }

}