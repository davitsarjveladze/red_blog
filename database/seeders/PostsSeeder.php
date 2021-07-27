<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\post;

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
                'summary' => 'slugs slug slug slugslug slug ',
                'published' => 1,
                'published_at' => date('yy-m-d'),
                'content' => 'aasdas da sd as das ddfgsdf gs dfgs dfg sdf gsdf gsdg f sd',
                'img_url' => 'img.jpg'
            ];
        }
        post::insert($posts);
    }
}
