<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TopicReport extends Model
{
    use HasFactory;
    protected $fillable = ['topic_id','user_id','reason','description'];

    public function topic(){ return $this->belongsTo(Topic::class); }
    public function user(){ return $this->belongsTo(User::class); }
}
