<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 30; $i++) {
            $post = new Post;
            $post->url_image = 'https://picsum.photos/300/200?random=' . rand(1, 1000);
            $post->title = $faker->sentence(10, true);
            $now = Carbon::now()->format('Y-m-d-H-i-s');
            $post->slug = Str::slug($post->title , '-') . '-' . $now;
            $post->paragraph = $faker->paragraph(100, false).
            $post->author = $faker->name();
            $post->is_published = rand(0,1);
            $post->save();
        }
    }
}
