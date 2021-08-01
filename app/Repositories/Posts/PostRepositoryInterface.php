<?php

namespace App\Repositories\Posts;

interface PostRepositoryInterface
{
    public function all();

    public function findPost($id);

    public function getAllOnlinePosts();

    public function getPost($slug_post);

    public function getAllPostsWithCategory();
}