<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'title' => $this->faker->unique()->sentence,
            'excerpt' => $this->faker->paragraph,
            'description' => $this->faker->text(100),
            'is_published' => $this->faker->boolean,
            'minutes_to_read' => $this->faker->numberBetween(1, 10),
        ];
    }
}
