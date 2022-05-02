<?php

namespace Tests\Browser;

use App\Models\User;
use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class BuildingTest extends DuskTestCase
{
    use DatabaseMigrations;


    public function test_admin_building_create()
    {
        
        $user = User::factory()->create([
            'email' => 'stefani@laravel.com',
        ]);
 
        $this->browse(function ($browser) use ($user) {
            
            $browser->visit('/login')
                    ->type('email', $user->email)
                    ->type('password', 'password')
                    ->press('Log in')
                    ->visit('/admin/building/create')
                    ->assertPathIs('/admin/building/create')
                    ->type('name', 'Test Building')
                    ->type('opening_time', '08:00:00')
                    ->type('closing_time', '18:00:00')
                    ->type('latitude', '16.6')
                    ->type('longitude', '16.8')
                    ->press('Submit')
                    ->assertPathIs('/admin/building');
        });
    }
}
