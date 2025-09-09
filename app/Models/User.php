<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'lastName',
        'deleted',
        'is_admin',
        'rank_id',
        'points',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function rank()
    {
        return $this->belongsTo(Rank::class);
    }

    public function updateUserRank(User $user): void
    {
        $newRank = Rank::where('min_points', '<=', $user->points)
                    ->orderByDesc('min_points')
                    ->first();

        if ($newRank && $user->rank_id !== $newRank->id) {
            $user->rank_id = $newRank->id;
            $user->save();
        }
    }
}
