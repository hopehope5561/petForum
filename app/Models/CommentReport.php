<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CommentReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment_id',
        'reporter_id',
        'category',
        'description',
        'status',
        'handled_by',
        'handled_at',
        'resolution_notes',
    ];

    protected $casts = [
        'handled_at' => 'datetime',
    ];

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }

    public function reporter()
    {
        return $this->belongsTo(User::class, 'reporter_id');
    }

    public function handler()
    {
        return $this->belongsTo(User::class, 'handled_by');
    }
}
