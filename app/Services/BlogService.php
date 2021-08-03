<?php

namespace App\Services;

use App\Repositories\Posts\PostRepositoryInterface;
use App\Repositories\Categories\CategoryRepositoryInterface;
use App\Repositories\Comments\CommentRepositoryInterface;
use App\Repositories\Tags\TagRepositoryInterface;


class BlogService
{
    private $postRepository;
    private $categoryRepository;
    private $commentRepository;
    private $tagRepository;

    public function __construct(
        PostRepositoryInterface $postRepository,
        CategoryRepositoryInterface $categoryRepository,
        CommentRepositoryInterface $commentRepository,
        TagRepositoryInterface $tagRepository
    )

    {
        $this->postRepository = $postRepository;
        $this->categoryRepository = $categoryRepository;
        $this->commentRepository = $commentRepository;
        $this->tagRepository = $tagRepository;
    }

    // public function getAllOnlinePostsWithPaginate() {
        
    //     return $this->postRepository->getAllOnlinePosts()->paginate(10);
        
    // }
}
