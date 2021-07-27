<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tag;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        tag::insert([['name' => 'tag1'],['name' => 'tag2'],['name' => 'tag3']]);
    }
}
