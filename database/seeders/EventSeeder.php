<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $e = new Event(); 
        $e->name = 'Event 1';
        $e->room_id = 1;
        $e->description = 'fgdfgderressadfgdg'; 
        $e->start_date_time ='2008-04-25 08:37:17';
        $e->end_date_time = '2008-04-25 08:37:17';
        $e->save();

        $events = Event::factory()->count(10)->create();
    }
}
