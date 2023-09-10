<?php

namespace Modules\User\Tests\Unit;

use Modules\Front\Database\factories\PostFactoryFactory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Front\Entities\Post;
use Modules\User\Entities\User;

class PostTest extends TestCase
{
    public $user;
    public $new_post;
    public $model_post;
    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::find(1);
        auth()->login($this->user);
        $this->new_post = PostFactoryFactory::new()->count(1)->make();
        $this->model_post = new Post();
    }
    public function test_save_new_post(): void
    {
        // ثبت نام بودن کاربر
        $this->assertTrue(auth()->check());
        // چک کردن ایا امروز بیشتر از سه تا پست اپلود کرده کار بر ثب نام شده یا نه
        dd($this->model_post->checkNewPost());
        $this->assertFalse($this->model_post->checkNewPost());
        // سیو خبر به همراه برسی ورودی ها
        $this->model_post->new($this->new_post);
        auth()->logout();
    }
}
