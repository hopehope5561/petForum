<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Support\TextCensor; 

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

    public function setContentAttribute($value): void
    {
        $this->attributes['content'] =
            TextCensor::apply((string) $value, config('banned.censor', []));
    }

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
        // Kullanıcıya puan ekleme ve rank güncelleme
        static::created(function ($comment) {
            $user = $comment->user;
            $user->points += 5;

            $rank = Rank::where('min_points', '<=', $user->points)
                ->orderByDesc('min_points')
                ->first();

            if ($rank) {
                $user->rank_id = $rank->id;
            }

            $user->save();
        });

        // Sansür: create ve update öncesi
        static::saving(function (Comment $comment) {
            $comment->content = TextCensor::apply(
                (string) $comment->content,
                config('banned.censor', [])
            );

            // Eğer tamamen engellenecek kelime varsa ve içerikte bulunursa hata fırlat
            if (
                TextCensor::hasBlocked($comment->content, config('banned.block', []))
            ) {
                throw \Illuminate\Validation\ValidationException::withMessages([
                    'content' => 'Yorumda uygunsuz içerik tespit edildi.',
                ]);
            }
        });
    }
    public function likes()
    {
        return $this->hasMany(\App\Models\CommentLike::class);
    }

    public function reports()
    {
        return $this->hasMany(\App\Models\CommentReport::class);
    }

    // Kullanışlı yardımcılar:
    public function isLikedBy(?\App\Models\User $user): bool
    {
        if (!$user) return false;
        return $this->likes()->where('user_id', $user->id)->exists();
    }
    

}
