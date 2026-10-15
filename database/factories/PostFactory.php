<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Termwind\Components\Paragraph;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->name();
        //$name=$this->faker->name();
        $name=$this->faker->sentence;
        return [
            'title' => $name,
            'slug'=> str($name) -> slug(),
            'content' => fake()->paragraphs(20, false),
            'description' => $this->faker->paragraphs(3, true),
            'category_id' => $this->faker->randomElement([1,5,4,6,7,20]),
            'posted' => $this->faker->randomElement(['yes','not']),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
