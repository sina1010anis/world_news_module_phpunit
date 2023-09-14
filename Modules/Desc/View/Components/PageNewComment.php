<?php

namespace Modules\Desc\View\Components;

use Illuminate\View\Component;

class PageNewComment extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $postId)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('desc::components.pagenewcomment', ['post_id' => $this->postId]);
    }
}
