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
     \App\Models\File::factory(2)->create();
      // \App\Models\File::factory(20)->create();
    }
}
