<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StNum;

class StNumSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stnum = new StNum();
        $stnum->stnum = 123456;
        $stnum->save();

        $stnums = StNum::factory()->count(10)->create();
    }
}
