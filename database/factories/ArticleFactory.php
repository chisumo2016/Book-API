<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {
        $title = $this->faker->sentence();

        return [
            'title'         => $title,
            'slug'          => Str::slug($title),
            'description'   => $this->faker->paragraph(),
            'author_id'     => $attribute['author_id'] ?? User::factory()

        ];
    }
}
