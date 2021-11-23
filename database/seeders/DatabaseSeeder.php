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
        $this->call(BuildingSeeder::class);
        $this->call(FloorSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(DisplaySeeder::class);
        
    }
}
