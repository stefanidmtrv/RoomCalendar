<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Room;


class RoomsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        
    $response = $this->get('/admin/dashboard');

    $response->assertStatus(403);

    }

    public function test_example_2()
    {
        
    $response = $this->post('/admin/event/store');

    $response->assertStatus(200);
  
}
}

