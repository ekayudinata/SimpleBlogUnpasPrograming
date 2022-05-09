<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,10)), 
            'slug' => $this ->faker->slug(), 
            'excerpt' => $this->faker->sentence(mt_rand(10,25)), 
            // 'body' => $this->faker->paragraphs(mt_rand(10,15)), 
            'body'=> collect($this->faker->paragraphs(mt_rand(5,10)))
            ->map(fn($parag)=>"<p>$parag</p>") // this arrow function is define add p tag for each paragraph
            ->implode(''),
            'category_id' => mt_rand(1,2), 
            'user_id' => mt_rand(1,5), 
        ];
    }
}
