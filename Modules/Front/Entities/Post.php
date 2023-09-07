<?php

namespace Modules\Front\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Front\Entities\Sort\SortPosts;
use Modules\User\Entities\User;


class Post extends Model
{
    use HasFactory;
    use SortPosts;

    public $data;
    protected $fillable = ['title', 'image_min', 'image_max_pc', 'image_max_mobile', 'body', 'user_id', 'menu_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id') ;
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id') ;
    }

    public function getRouteKeyName()
    {
        return 'title';
    }

    public function sortPosts($sort)
    {
        switch ($sort) {
            case 'sortByDateNewsNow':
                $this->data = $this->sortByDateNewsNow();
                break;
            case 'sortByDateNewsOld':
                $this->data = $this->sortByDateNewsOld();
                break;
            case 'sortOnlyNewsDay':
                $this->data = $this->sortOnlyNewsDay();
                break;
            case 'sortByViews':
                $this->data = $this->sortByViews();
                break;
            case 'sortByLike':
                $this->data = $this->sortByLike();
                break;
            case 'sortBySelected':
                $this->data = $this->sortBySelected();
                break;
        }
        return $this;
    }

}
