<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static find($id)
 */
class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'post_id',
        'comment',
        'website',
    ];

    public function post() {
        return $this->belongsTo(Post::class);
    }
}
