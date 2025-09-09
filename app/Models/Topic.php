<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'user_id', 'title', 'content', 'deleted'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

     public function user()
    {
        return $this->belongsTo(User::class);
    }

     public function comments()
    {
        return $this->hasMany(Comment::class)->where('deleted', 0);
    }

    public function images()
    {
        return $this->hasMany(TopicImage::class, 'topic_id');
    }

}
