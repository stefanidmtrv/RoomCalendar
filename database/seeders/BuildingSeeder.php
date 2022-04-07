<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Building;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $b = new Building;
        $b->name = 'Building 1';
        $b->opening_time ='08:00:00';
        $b->closing_time = '18:00:00';
        $b->latitude = 2.453;
        $b->longitude = 2.453;
        $b->save();
        
        $buildings = Building::factory()->count(10)->create();
    }
}
