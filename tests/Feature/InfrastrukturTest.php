<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InfrastrukturTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_example()
    {
        $this->refreshDatabase();
        $this->seed();

        $user = User::firstWhere('email', 'test@gmail.com');
    
        $response = $this->actingAs($user)->get('/infrastructure');

        $response->assertStatus(200);
    }
}
