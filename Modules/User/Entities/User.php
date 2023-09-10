<?php

namespace Modules\User\Entities;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Modules\Front\Entities\Option;
use Modules\Front\Entities\Post;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'job',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }

    public function options()
    {
        return $this->hasMany(Option::class, 'option_id', 'id');
    }

    public function checkAboveLike(): bool
    {
        if (auth()->check()) {
            return ($this->posts->sum('like') >= 30) ? true : false;
        }
        return false;
    }

    public function likePost(Post $post): bool
    {
        if (auth()->check()) {
            return !! ($post->user->id == auth()->user()->id) ? false : Post::find($post->id)->increment('like', 1);
        }
        return false;
    }
}
