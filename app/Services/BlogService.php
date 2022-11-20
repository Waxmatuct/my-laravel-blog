<?php

namespace App\Services;

use App\Repositories\Posts\PostRepositoryInterface;
use App\Repositories\Categories\CategoryRepositoryInterface;
use App\Repositories\Comments\CommentRepositoryInterface;
use App\Repositories\Tags\TagRepositoryInterface;


class BlogService
{
    private PostRepositoryInterface $postRepository;
    private CategoryRepositoryInterface $categoryRepository;
    private CommentRepositoryInterface $commentRepository;
    private TagRepositoryInterface $tagRepository;

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

    public function getAllPostsWithCategory()
    {
        return $this->postRepository->getAllPostsWithCategory()->paginate(10);
    }

    public function getAllOnlinePosts()
    {
        return $this->postRepository->getAllOnlinePosts()->paginate(5);
    }

    public function findPost($id)
    {
        return $this->postRepository->findPost($id);
    }

    public function getPostWithSlug($slug_post)
    {
        return $this->postRepository->getPost($slug_post);
    }

    public function getAllCategories()
    {
        return $this->categoryRepository->all();
    }

    public function getAllCategoriesOrderedById()
    {
        return $this->categoryRepository->getCategories();
    }

    public function getCurrentCategory($slug)
    {
        return $this->categoryRepository->getCurrentCategory($slug);
    }

    public function getAllTags()
    {
        return $this->tagRepository->all();
    }

    public function getCurrentTag($slug)
    {
        return $this->tagRepository->getCurrentTag($slug);
    }

    public function getTagsOrderedByName()
    {
        return $this->tagRepository->getTags();
    }

    public function getAllComments()
    {
        return $this->commentRepository->all();
    }
}
