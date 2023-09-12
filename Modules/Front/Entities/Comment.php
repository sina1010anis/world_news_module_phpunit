<?php

namespace Modules\Front\Entities;

use Modules\Front\Database\factories\NewCommentFactoryFactory;
use Modules\Front\Entities\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Front\Http\Requests\NewCommentRequest;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'status', 'user_id'];

    public function checkAdminForPost(Post $post): bool
    {
        return !! (auth()->check() && $post->user_id == auth()->user()->id) ? true : false;
    }

    public function saveComment(Comment|NewCommentRequest $request, $testStatus = 'spam'): void
    {
        $this->create(['title' => $request->title, 'body' => $request->body, 'user_id' => auth()->user()->id, 'status' => $testStatus]);
    }

    public function editStatusComment(Comment $comment)
    {
        if ($comment->status == 'spam') {
            $comment->update(['status' => 'safe']);
        } else {
            $comment->update(['status' => 'spam']);
        }
    }
}
