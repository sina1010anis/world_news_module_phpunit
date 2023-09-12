<?php

namespace Modules\Front\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Front\Entities\Comment;

class NewCommentFactoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => fake()->title().' '.fake()->userName(),
            'body' => fake()->text(300),
        ];
    }
}

