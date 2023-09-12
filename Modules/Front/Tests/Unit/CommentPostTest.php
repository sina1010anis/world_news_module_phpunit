<?php

namespace Modules\Front\Tests\Unit;

use Tests\TestCase;
use Modules\Front\Entities\Post;
use Modules\Front\Entities\Comment;
use Modules\Front\Database\factories\NewCommentFactoryFactory as CommentFactory;
use Modules\User\Entities\User;

class CommentPostTest extends TestCase
{

    public $model_comment;
    public $model_post;
    public $new_comment;
    public $post;
    public $user;
    public $comment;
    const USER_ID = 1;
    const POST_ID = 58;
    const COMMNET_ID = 24;
    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::find(self::USER_ID);
        auth()->login($this->user);
        $this->model_comment = new Comment();
        $this->model_post = new Post();
        $this->new_comment = CommentFactory::new()->count(1)->make()->first();
        $this->post = Post::find(self::POST_ID);
        $this->comment = Comment::find(self::COMMNET_ID);
    }
    public function test_new_comment(): void
    {
        $this->assertTrue(auth()->check());
        $this->assertTrue($this->model_post->hasPost($this->post->id));
        $this->model_comment->saveComment($this->new_comment);
        $this->assertDatabaseHas('comments', ['title' => $this->new_comment->title, 'body' => $this->new_comment->body]);
    }

    public function test_edit_status_comment(): void
    {
        $this->assertTrue(auth()->check());
        $this->assertTrue($this->model_post->hasPost($this->post->id));
        //
        $this->assertTrue($this->model_comment->checkAdminForPost($this->post));
        $this->model_comment->editStatusComment($this->comment);
    }
    public function tearDown(): void
    {
        auth()->logout();
    }
}
