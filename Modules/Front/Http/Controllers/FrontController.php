<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;
use Jenssegers\Agent\Agent;
use Modules\Front\Entities\Post;
use Modules\User\Entities\User;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Post $post, User $user, Agent $agent)
    {
        $browser = $agent->browser();
        $version_a = $agent->version($browser);

        $platform = $agent->platform();
        $version = $agent->version($platform);
        dd($version);
        dd(Http::post('https://httpbin.org/post', ['a' => 'b'])->json());
        return view('front::index', ['posts' => $post->latest('id')->paginate(10)]);
    }

    public function sortNews($sort, Post $post)
    {
        return view('front::index', ['posts' => $post->sortPosts($sort)->data]);
    }
}
