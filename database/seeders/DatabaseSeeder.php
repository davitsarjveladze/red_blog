<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'davit',
            'email' => 'davit@davit.com',
            'password' => bcrypt('password'),
        ]);
        $this->call([
            CategorySeeder::class,
            PostsSeeder::class,
            PostsToCategorySeeder::class,
            TagsSeeder::class,
            PostsToTagSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
