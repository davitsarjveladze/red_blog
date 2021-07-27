<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\post;
use Illuminate\Support\Str;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [];
        for ($i = 1;$i < 19; $i ++) {
            $posts[] =  [
                'author_id' => 1,
                'parent_id' => 0,
                'title' => 'სათაური ' . $i,
                'slug' => 'slug',
                'summary' => Str::random(50),
                'published' => 1,
                'published_at' => date('yy-m-d'),
                'content' => Str::random(150),
                'img_url' => 'img.jpg'
            ];
        }
        post::insert($posts);
    }
}
