<?php

namespace Modules\Desc\View\Components;

use Illuminate\View\Component;

class Comment extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $comment, public $titleComment)
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
        return view('desc::components.comment', ['comment' => $this->comment, 'titleComment' => $this->titleComment]);
    }
}
