<?php

namespace Database\Seeders;

use App\Models\Livre;
use App\Models\User;
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
        Livre::factory(10)->create();
    }
}
