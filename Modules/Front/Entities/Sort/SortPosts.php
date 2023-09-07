<?php

namespace Modules\Front\Entities\Sort;

use Carbon\Carbon;

trait SortPosts
{
    public function sortByDateNewsNow()
    {
        return $this->latest('id')->paginate(10);
    }

    public function sortByDateNewsOld()
    {
        return $this->oldest('id')->paginate(10);
    }

    public function sortOnlyNewsDay()
    {
        return $this->whereDate('created_at', Carbon::now()->today())->paginate(10);
    }

    public function sortByViews()
    {
        return $this->latest('view')->paginate(10);
    }

    public function sortByLike()
    {
        return $this->where('like', '!=', 0)->latest('like')->paginate(10);
    }

    public function sortBySelected()
    {
        return $this->where('select', '!=', null)->paginate(10);
    }
}
