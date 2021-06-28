<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(userSeeder::class); // \App\Models\User::factory(10)->create();
        $this->call(CategorySeeder::class);
        $this->call(postSeeder::class);
        $this->call(CommentSeeder::class);
    }
}
