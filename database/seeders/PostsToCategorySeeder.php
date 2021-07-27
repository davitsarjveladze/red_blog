<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\post_category;

class PostsToCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        post_category::insert([
            [
                'categories_id' => 1,
                'post_id' => 2
            ],
            [
                'categories_id' => 1,
                'post_id' => 3
            ],
            [
                'categories_id' => 1,
                'post_id' => 5
            ],
            [
                'categories_id' => 1,
                'post_id' => 7
            ],
            [
                'categories_id' => 1,
                'post_id' => 4
            ],
            [
                'categories_id' => 2,
                'post_id' => 4
            ],
            [
                'categories_id' => 2,
                'post_id' => 1
            ],
            [
                'categories_id' => 2,
                'post_id' => 11
            ],
            [
                'categories_id' => 4,
                'post_id' => 12
            ],
            [
                'categories_id' => 5,
                'post_id' => 6
            ],
            [
                'categories_id' => 6,
                'post_id' => 1
            ],
        ]);
    }
}
