<?php

namespace Modules\User\Tests\Unit;

use Tests\TestCase;
use Modules\User\Entities\User;
use Modules\Front\Entities\Post;
use Illuminate\Support\Facades\Session;
use Modules\Front\Database\factories\PostFactoryFactory as PostFactory;
use Modules\User\Database\factories\EditPostFactoryFactory as EditPostFactory;

class PostTest extends TestCase
{
    public $user, $post, $new_post, $model_post, $model_user, $request, $edit_post;
    const USER_ID = 1;
    const POST_ID = 61;
    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::find(self::USER_ID);
        $this->post = Post::find(self::POST_ID);
        auth()->login($this->user);
        $this->new_post = PostFactory::new()->count(1)->make()->first();
        $this->edit_post = EditPostFactory::new()->count(1)->make()->first();
        $this->model_post = new Post();
        $this->model_user = new User();
    }
    public function test_new_post(): void
    {
        $this->assertTrue(auth()->check());
        // checkNewPostCount() This method checks whether the target user has uploaded three contents today or not
        $this->assertTrue($this->model_post->checkNewPostCount());
        $this->model_post->newPost($this->new_post);
        $this->assertDatabaseHas('posts', ['title' => $this->new_post->title, 'body' => $this->new_post->body, 'user_id' => auth()->user()->id]);
    }

    public function test_like_post(): void
    {
        $this->assertTrue(auth()->check());
        //checkAboveLike()  This method checks whether the target user has more than 30 likes or not
        $this->assertTrue($this->user->checkAboveLike());
        //$this->model_user->hasLikeAndSetSession(self::POST_ID);
    }

    public function test_edit_post(): void
    {
        $this->assertTrue(auth()->check());
        $this->assertTrue($this->model_post->hasPost($this->post->id));
        // This function checks whether the post sent by the user is for her or not checkUserForPost()
        $this->assertTrue($this->model_post->checkUserForPost($this->post));
        $this->assertTrue($this->model_post->editPost($this->edit_post, $this->post));
        $this->assertDatabaseHas('posts', ['title' => $this->edit_post->title]);
    }

    public function test_delete_post(): void
    {
        $this->assertTrue(auth()->check());
        $this->assertTrue($this->model_post->hasPost($this->post->id));
        // This function checks whether the post sent by the user is for her or not checkUserForPost()
        $this->assertTrue($this->model_post->checkUserForPost($this->post));
        $this->assertTrue($this->model_post->postDelete($this->post));
        $this->assertDatabaseMissing('posts', ['id' => self::POST_ID]);
    }

    public function tearDown(): void
    {
        auth()->logout();
    }
}
