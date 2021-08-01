<?php

namespace App\Repositories\Comments;

interface CommentRepositoryInterface
{
    public function all();

    public function getComments();

    public function findComment($id);

}