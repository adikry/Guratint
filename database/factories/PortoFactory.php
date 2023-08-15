<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Porto>
 */
class PortoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->realText(30);

        return [
            'nama' => $title,
            'slug' => Str::slug($title),
            'thumbnail' => fake()->imageUrl,
            'user_id' => 1,
            'kategori_id' => 1,
            'content' => [fake()->imageUrl, fake()->imageUrl, fake()->imageUrl, fake()->imageUrl],
            'published_at' => fake()->dateTime,
        ];
    }
}
