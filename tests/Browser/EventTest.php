<?php
 
namespace Tests\Browser;
 
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Chrome;
use Tests\DuskTestCase;
 
class EventTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function test_basic_example()
    {
        $this->browse(function ($browser) {
            $browser->visit('admin/stmgmt/create')
                    
                    ->type('stnum', '1234')
                    
                    ->press('Submit')
                    ->assertPathIs('admin/stmgmt');
        });
    }
}