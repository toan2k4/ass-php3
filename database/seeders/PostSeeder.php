<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Schema;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        // Category::truncate();
        // Tag::truncate();
        // User::truncate();
        // Post::truncate();
        // Comment::truncate();

        // Category::factory(10)->create();
        // Tag::factory()->count(20)->create();
        // User::factory()->count(10)->create();
        Post::factory(100)->create();
        Comment::factory(100)->create();
        \DB::table('post_tag')->truncate();
        for ($i = 1; $i < 101; $i++) {
            \DB::table('post_tag')->insert([
                [
                    'post_id' => $i,
                    'tag_id' => rand(1, 10)
                ],
                [
                    'post_id' => $i,
                    'tag_id' =>rand(11, 20)
                ]
            ]);
        }
    }
}
