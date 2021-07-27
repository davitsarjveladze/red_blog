<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\post_tag;
class PostsToTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        post_tag::insert([
            [
                'post_id' => 1,
                'tag_id' => 1,
            ],
            [
                'post_id' => 2,
                'tag_id' => 1,
            ],
            [
                'post_id' => 3,
                'tag_id' => 1,
            ],
            [
                'post_id' => 4,
                'tag_id' => 1,
            ],
            [
                'post_id' => 5,
                'tag_id' => 1,
            ],
            [
                'post_id' => 6,
                'tag_id' => 2,
            ],
            [
                'post_id' => 7,
                'tag_id' => 2,
            ],
            [
                'post_id' => 8,
                'tag_id' => 2,
            ],
            [
                'post_id' => 2,
                'tag_id' => 2,
            ],
            [
                'post_id' => 15,
                'tag_id' => 2,
            ],
            [
                'post_id' => 11,
                'tag_id' => 3,
            ],
            [
                'post_id' => 13,
                'tag_id' => 3,
            ],
            [
                'post_id' => 1,
                'tag_id' => 3,
            ],
            [
                'post_id' => 5,
                'tag_id' => 3,
            ]


        ]);
    }
}
