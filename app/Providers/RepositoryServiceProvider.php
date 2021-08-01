<?php

namespace App\Providers;

use App\Repositories\Posts\PostRepository;
use App\Repositories\Posts\PostRepositoryInterface;
use App\Repositories\Categories\CategoryRepository;
use App\Repositories\Categories\CategoryRepositoryInterface;
use App\Repositories\Comments\CommentRepository;
use App\Repositories\Comments\CommentRepositoryInterface;
use App\Repositories\Tags\TagRepository;
use App\Repositories\Tags\TagRepositoryInterface;
use App\Repositories\Interfaces\BlogRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            PostRepositoryInterface::class, 
            PostRepository::class
        );

        $this->app->bind(
            CategoryRepositoryInterface::class, 
            CategoryRepository::class
        );        
        
        $this->app->bind(
            CommentRepositoryInterface::class, 
            CommentRepository::class
        );

        $this->app->bind(
            TagRepositoryInterface::class, 
            TagRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
