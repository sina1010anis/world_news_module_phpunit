<?php

namespace Modules\Front\View\Components;

use Illuminate\View\Component;
use Modules\Front\Entities\Menu;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $menus;
    public function __construct()
    {
        $this->menus = (new Menu())->oldest('id')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('front::components.header', ['menus' => $this->menus]);
    }
}
