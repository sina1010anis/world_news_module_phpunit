<?php

namespace Modules\Desc\Http\Controllers;

use Illuminate\Http\Request;
use Modules\User\Entities\User;
use Modules\Front\Entities\Post;
use Illuminate\Routing\Controller;
use Modules\Front\Entities\Comment;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Session;
use Modules\Front\Http\Requests\NewCommentRequest;

class DescController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Post $send)
    {
        //Session::put('l_'.auth()->user()->id.'_5', 'active');
        //return session()->has('l_'.auth()->user()->id.'_5');
        //dd(Session::all());
        return view('desc::index', compact('send'));
    }

    public function newComment(NewCommentRequest $request, $post_id, Post $post, Comment $comment)
    {
        if ($post->hasPost($post_id)) {
            $comment->saveComment($request, $post_id);
            return back()->with(['msg_ok' => 'Send: your message is send.']);
        }
        return back()->with(['msg_error' => 'Error: bad request.']);
    }

    public function likePost(Request $request, Post $post, User $user)
    {
        if ($user->checkAboveLike()) {
            return $user->hasLikeAndSetSession($request->id)->saveLike();
        }
        return 'Error: bad request.';
    }

}
