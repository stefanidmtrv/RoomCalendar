<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $u1 = new User;
        $u1->name = "John Doe";
        $u1->email = "test@gmail.com";
        $u1->password = "testPassword";
        $u1->assignRole('admin');
        $u1->save();

        $users = User::factory()->count(15)->create();
        
    }
}
