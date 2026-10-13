<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Airline;
use App\Models\Flight;
use App\Models\Travel;
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
         Airline::factory(10)->create();
         User::factory(20)->create();

        Flight::factory(30)->create();
        Travel::factory(50)->create();
    }
}
