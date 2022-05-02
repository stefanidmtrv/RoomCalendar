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

    // PASS  Tests\Feature\ExampleTest
    // ✓ example
    }

    public function test_example_2()
    {
        
    $response = $this->post('/admin/event/store');

    $response->assertStatus(200);
    // • Tests\Feature\RoomsTest > example 2
    // Expected response status code [200] but received 403.
    // Failed asserting that 200 is identical to 403.
}
}
// PASS  Tests\Feature\Auth\AuthenticationTest
// ✓ login screen can be rendered
// ✓ users can authenticate using the login screen
// ✓ users can not authenticate with invalid password
