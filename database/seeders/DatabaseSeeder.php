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
         \App\Models\User::factory(10)->create(); //pass
        \App\Models\Desk::factory(10)->create(); //pass
        \App\Models\DeskList::factory(10)->create(); //pass
        \App\Models\Card::factory(10)->create(); //pass
        \App\Models\Task::factory(10)->create();
    }
}
