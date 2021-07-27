<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::insert(['parent_id' => null,'title' => 'კატეგორია 1']);
        category::insert(['parent_id' => null,'title' => 'კატეგორია 2']);
        category::insert(['parent_id' => null,'title' => 'კატეგორია 3']);
        category::insert([
            ['parent_id' => 1,'title' => 'კატეგორია 1_1'],
            ['parent_id' => 1,'title' => 'კატეგორია 1_2'],
            ['parent_id' => 2,'title' => 'კატეგორია 2_1']

        ]);
    }
}
