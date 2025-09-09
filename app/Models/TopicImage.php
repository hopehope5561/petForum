<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicImage extends Model
{
    use HasFactory;

    protected $table = 'topic_images';

    protected $fillable = [
        'topic_id',
        'image_path',
        'deleted',
    ];

    /**
     * TopicImage hangi Topic'e ait
     */
    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id');
    }
}
