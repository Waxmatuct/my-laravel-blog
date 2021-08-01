<?php

namespace App\Repositories\Tags;

interface TagRepositoryInterface
{
    public function all();

    public function getTags();

    public function getCurrentTag($slug);

}