<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Front\Entities\Menu;
use Modules\Front\Entities\Post;
use Modules\User\Http\Requests\NewPostRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $menus = Menu::latest('id')->get();
        return view('user::index', ['menus' => $menus]);
    }

    public function newPost(NewPostRequest $request, Post $post)
    {
        $post->newPostReal($request);
    }

    public function showComment()
    {
        return view('user::comment');
    }
}
