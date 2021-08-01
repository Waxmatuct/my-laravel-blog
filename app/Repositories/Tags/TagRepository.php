<?php

namespace App\Repositories\Tags;

use App\Models\Tag;

class TagRepository implements TagRepositoryInterface
{
    public function all()
    {
        return Tag::all();
    }

    public function getTags()
    {
        return Tag::orderBy('name')->get();
    }

    public function getCurrentTag($slug)
    {
        return Tag::where('slug', $slug)->first();
    }

}