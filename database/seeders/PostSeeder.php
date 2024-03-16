<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;

use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::truncate();
        for ($i = 0; $i < 30; $i++) {
            $title = fake()->sentence();
            $slug = Str::slug($title);

            //$post = new Post();
            //$post->title = fake()->sentence();
            //$post->content = fake()->paragraph();
            //$post->save();

            
            $post = Post::create([
                'title' => $title,
                'slug' => $slug,
                'content' => fake()->paragraph(),
            ]);

            //$post = new Post();
            //$post->fill([
            //    'title' => $title,
            //    'slug' => $slug,
            //    'content' => fake()->paragraph(),
            //]);
        }
    }
}
