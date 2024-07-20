<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
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
        $title = fake()->sentence();
        $slug = \Str::slug($title, '-');

        // Kiểm tra và đảm bảo slug là duy nhất
        $originalSlug = $slug;
        $counter = 1;
        while (Post::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }
        return [
            'category_id' => rand(1, 10),
            'title' => $title,
            'slug' => $slug,
            'content' => fake()->paragraphs(10, true),
            'thumbnail' => fake()->image(),
            'views' => rand(20, 400),
            'is_status' => fake()->boolean(),
            'is_trending' =>  fake()->boolean(),
            'is_featured' =>  fake()->boolean(),
            'is_most_popular' =>  fake()->boolean(),
            'is_hot' =>  fake()->boolean(),
            'is_most_watched' =>  fake()->boolean(),
            'is_banner' =>  fake()->boolean(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
