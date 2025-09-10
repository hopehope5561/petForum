<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'topic_id',
        'user_id',
        'content',
        'deleted',
        'image_path'
    ];

    /**
     * Get the topic that owns the comment.
     */
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    /**
     * Get the user that wrote the comment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted()
    {
        static::created(function ($comment) {
            $user = $comment->user;
            $user->points += 5;

        
            $rank = Rank::where('min_points', '<=', $user->points)
                ->orderBy('min_points', 'desc')
                ->first();

            if ($rank) {
                $user->rank_id = $rank->id;
            }

            $user->save();
        });
}

}
