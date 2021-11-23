<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Display;

class DisplaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $d = new Display();
        $d->room_id = 1;
        $d->name = 'Display 1';
        $d->secret_key = 'fgdfgdfgdg'; 
        $d->save();

        $displays = Display::factory()->count(10)->create();
    }
}
