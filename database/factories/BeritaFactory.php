<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
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
            'judul' => $title,
            'slug' => Str::slug($title),
            'body' => fake()->realText(500),
            'thumbnail' => fake()->imageUrl,
            'published_at' => fake()->dateTime,
            'user_id' => 1,
            'kategori_id' => mt_rand(1, 8),
        ];
    }
}
