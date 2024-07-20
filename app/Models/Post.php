<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'content',
        'thumbnail',
        'views',
        'is_status',
        'is_trending',
        'is_featured',
        'is_most_popular',
        'is_hot',
        'is_most_watched',
        'is_banner',
    ];


    protected $casts = [
        'is_status' => 'boolean',
        'is_trending' => 'boolean',
        'is_featured' => 'boolean',
        'is_most_popular' => 'boolean',
        'is_hot' => 'boolean',
        'is_most_watched' => 'boolean',
        'is_banner' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            
            $slug = \Str::slug($post->title, '-');
            
           
            $originalSlug = $slug;
            $counter = 1;
            while (static::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $counter++;
            }

            $post->slug = $slug;
        });
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }


    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
