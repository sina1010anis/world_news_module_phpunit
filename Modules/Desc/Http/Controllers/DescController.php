<?php

namespace Modules\Desc\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Front\Entities\Post;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;

class DescController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Post $send)
    {
        return $send->title;
    }

}
