<?php

namespace Modules\Filter\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Front\Entities\Menu;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;

class FilterController extends Controller
{

    public function index(Menu $send)
    {
        $menus = Menu::latest('id')->get();
        return view('filter::index', ['menu' => $send, 'menus' => $menus]);
    }

}
