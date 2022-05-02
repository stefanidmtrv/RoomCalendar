<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function test_admin_login()
    {
        $user = User::factory()->create([
            'email' => 'test@laravel.com',
        ]);
 
        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                    ->type('email', $user->email)
                    ->type('password', 'password')
                    ->press('Log in')
                    ->assertPathIs('/admin/dashboard');
        });
    }
}
