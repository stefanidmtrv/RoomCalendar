<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r = new Room;
        $r->floor_id = 1;
        $r->table_capacity = 1;
        $r->computer_capacity = 1;
        $r->number_of_projectors = 1;
        $r->save();

        $rooms = Room::factory()->count(5)->create();

    }
}
