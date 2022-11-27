<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed id
 * @method static findOrFail(mixed $id)
 * @method static create(array $array)
 * @method static orderByDesc(string $string)
 * @method static whereMonth(string $string, int $month)
 * @method static whereYear(string $string, string $string1, $year)
 */
class Note extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'slug'
    ];
}
