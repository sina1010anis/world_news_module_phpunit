<?php

namespace Modules\Front\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\User\Entities\User;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image_min', 'image_max_pc', 'image_max_mobile', 'body', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id') ;
    }

}
