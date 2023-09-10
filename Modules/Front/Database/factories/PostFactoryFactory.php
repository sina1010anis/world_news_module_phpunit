<?php

namespace Modules\Front\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Front\Entities\Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => fake()->title().' '.fake()->name(),
            'image_min' => 'storage/img_'.rand(1, 5).'.jpg',
            'image_max_mobile' => 'storage/img_'.rand(1, 5).'.jpg',
            'image_max_pc' => 'storage/img_'.rand(1, 5).'.jpg',
            'body' => fake()->text(250),
            'menu_id' => rand(1, 7),
        ];
    }
}

