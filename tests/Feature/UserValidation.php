<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserValidation extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $user = User::firstWhere('email', 'test@gmail.com');
        $response = $this->actingAs($user)->get('/user/validation');

        $response->assertStatus(200);
    }
}
