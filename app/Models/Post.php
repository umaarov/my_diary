<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body', 'tags'];

    protected $casts = [
        'tags' => 'array', // Cast tags as an array
    ];

    public function scopeSearch($query, $term)
    {
        return $query->where('title', 'LIKE', "%{$term}%")
            ->orWhere('body', 'LIKE', "%{$term}%");
    }

    public function getRelatedPosts(int $limit = 3)
    {
        return static::where('tags', '&&', $this->tags)
            ->where('id', '<>', $this->id)
            ->limit($limit)
            ->get();
    }
}
