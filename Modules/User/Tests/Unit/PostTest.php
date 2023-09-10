<?php

namespace Modules\User\Tests\Unit;

use Carbon\Carbon;
use Tests\TestCase;
use Modules\User\Entities\User;
use Modules\Front\Entities\Post;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Modules\Front\Database\factories\PostFactoryFactory;

class PostTest extends TestCase
{
    public $user;
    public $post;
    public $new_post;
    public $model_post;
    public $model_user;
    public $request;
    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::find(2);
        $this->post = Post::find(52);
        auth()->login($this->user);
        $this->new_post = PostFactoryFactory::new()->count(1)->make()->first();
        $this->model_post = new Post();
        $this->model_user = new User();
    }
    public function test_save_new_post(): void
    {
        $this->assertTrue(auth()->check());
        // checkNewPostCount() This method checks whether the target user has uploaded three contents today or not
        $this->assertTrue($this->model_post->checkNewPostCount());
        $this->model_post->new($this->new_post);
        $this->assertDatabaseHas('posts', ['title' => $this->new_post->title, 'body' => $this->new_post->body, 'user_id' => auth()->user()->id]);
    }

    public function test_post_like(): void
    {
        $this->assertTrue(auth()->check());
        //checkAboveLike()  This method checks whether the target user has more than 30 likes or not
        $this->assertTrue($this->user->checkAboveLike());
        $this->assertTrue($this->model_user->likePost($this->post));
    }

    public function tearDown(): void
    {
        auth()->logout();
    }
}
