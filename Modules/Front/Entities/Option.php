<?php

namespace Modules\Front\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\User\Entities\User;

class Option extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'post_id', 'type'];

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
