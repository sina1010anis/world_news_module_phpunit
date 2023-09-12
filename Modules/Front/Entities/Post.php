<?php

namespace Modules\Front\Entities;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\User\Entities\User;
use Illuminate\Database\Eloquent\Model;
use Modules\Front\Entities\Sort\SortPosts;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Front\Database\factories\PostFactoryFactory;
use Modules\User\Database\factories\EditPostFactoryFactory;
use Modules\User\Http\Requests\NewPostRequest;
use Modules\User\Http\Requests\TestNewPostRequest;


class Post extends Model
{
    use HasFactory;
    use SortPosts;

    public $data;
    protected $fillable = [
        'title',
        'image_min',
        'image_max_pc',
        'image_max_mobile',
        'body',
        'user_id',
        'menu_id',
        'view',
        'like'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id') ;
    }

    public function getRouteKeyName()
    {
        return 'title';
    }

    public function sortPosts($sort)
    {
        switch ($sort) {
            case 'sortByDateNewsNow':
                $this->data = $this->sortByDateNewsNow();
                break;
            case 'sortByDateNewsOld':
                $this->data = $this->sortByDateNewsOld();
                break;
            case 'sortOnlyNewsDay':
                $this->data = $this->sortOnlyNewsDay();
                break;
            case 'sortByViews':
                $this->data = $this->sortByViews();
                break;
            case 'sortByLike':
                $this->data = $this->sortByLike();
                break;
            case 'sortBySelected':
                $this->data = $this->sortBySelected();
                break;
        }
        return $this;
    }
    public function checkNewPostCount()
    {
        if (auth()->check()) {
            return (User::find(auth()->user()->id)->posts()->whereDate('created_at', Carbon::toDay())->count() < 3) ? true : false;
        }
        return false;
    }

    public function newPost(NewPostRequest|Post $newPostRequest): void
    {
        Post::create([
            'title' => $newPostRequest->title,
            'image_min' => $newPostRequest->image_min,
            'image_max_mobile' => $newPostRequest->image_max_mobile,
            'image_max_pc' => $newPostRequest->image_max_pc,
            'body' => $newPostRequest->body,
            'menu_id' => $newPostRequest->menu_id,
            'user_id' => auth()->user()->id,
            'select' => null,
            'like' => 0,
            'view' => 0
        ]);
    }

    public function checkUserForPost(Post $post): bool
    {
        return !!(auth()->check() && $post->user_id == auth()->user()->id) ? true : false;
    }
    public function postDelete(Post $post): bool
    {
        if (auth()->check()) {
            $post->delete();
            return true;
        }
        return false;
    }

    public function hasPost($post_id): bool
    {
        return (Post::whereId($post_id)->count() == 1) ? true : false;
    }

    public function editPost(NewPostRequest|Post $request,Post $post): bool
    {
        if (auth()->check()) {
            $post->update([
                'title' => $request->title,
                'image_min' => $request->image_min,
                'image_max_mobile' => $request->image_max_mobile,
                'image_max_pc' => $request->image_max_pc,
                'body' => $request->body,
                'menu_id' => $request->menu_id,
            ]);
            return true;
        }
        return false;
    }
}
