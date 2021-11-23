<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Floor;

class FloorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $f = new Floor;
        $f->building_id = 1;
        $f->number = 0;
        $f->save();

        $floor = Floor::factory()->count(3)->create();
    }
}
