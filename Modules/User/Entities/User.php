<?php

namespace Modules\User\Entities;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Session;
use Laravel\Sanctum\HasApiTokens;
use Modules\Front\Entities\Comment;
use Modules\Front\Entities\Option;
use Modules\Front\Entities\Post;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $product_id;
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
    public function comments()
    {
        return  $this->hasMany(Comment::class, 'user_id', 'id');
    }
    public function checkAboveLike(): bool
    {
        if (auth()->check()) {
            return (auth()->user()->posts->sum('like') >= 30) ? true : false;
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



    public function hasLikeAndSetSession($id): User
    {
        $this->product_id = $id;
        if (Session::has('l_'.auth()->user()->id.'_'.$this->product_id)) {
            $this->deleteLike();
            echo 'Delete Like';
        } else {
            $this->like();
            echo 'Like';
        }
        return $this;
    }
    public function saveLike()
    {
        if (Session::has('l_'.auth()->user()->id.'_'.$this->product_id)) {
            Post::find($this->product_id)->increment('like', 1);
        } else {
            Post::find($this->product_id)->decrement('like', 1);
        }
    }
    public function like()
    {
        Session::put('l_'.auth()->user()->id.'_'.$this->product_id, 'active');
    }

    public function deleteLike()
    {
        Session::forget('l_'.auth()->user()->id.'_'.$this->product_id);
    }
}
