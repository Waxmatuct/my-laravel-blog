<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, $post_id)
 */
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'image',
        'description',
        'slug',
        'content',
        'online',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
