<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Seeders\User\UserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Modules\Report\app\Models\Report;
use Tests\TestCase;

class ReportTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;

    public function test_display_report_view()
    {
        $this->refreshDatabase();
        $this->seed();

        $user = User::firstWhere('email', 'superadmin@gmail.com');

        $response = $this->actingAs($user)->get(route('report.index'));

        $response->assertStatus(200);
    }

    public function test_get_report_list_null()
    {
        $this->refreshDatabase();
        $this->seed(UserSeeder::class);

        $user = User::firstWhere('email', 'superadmin@gmail.com');

        $response = $this->actingAs($user)->get(route('report.index'));

        $response->assertSeeText('No data to display');
    }

    public function test_get_report_list_show_ten()
    {
        $this->refreshDatabase();
        $this->seed();

        $user = User::firstWhere('email', 'superadmin@gmail.com');

        $response = $this->actingAs($user)->get(route('report.index'));

        $response
            ->assertSeeText('1')
            ->assertSeeText('2')
            ->assertSeeText('3')
            ->assertSeeText('4')
            ->assertSeeText('5')
            ->assertSeeText('6')
            ->assertSeeText('7')
            ->assertSeeText('8')
            ->assertSeeText('9')
            ->assertSeeText('10');
    }

    public function test_super_admin_canont_create_report()
    {
        $this->refreshDatabase();
        $this->seed();

        $user = User::firstWhere('email', 'superadmin@gmail.com');

        $response = $this->actingAs($user)->post(
            uri: route('report.store'),
            data: [
                'title' => 'Title',
                'description' => 'description',
                'attach' => json_encode(array()),
                'user_id' => $user->id
            ]
        );

        return $response->assertRedirect(uri: route('dashboard.index'));
    }

    // public function test_create_report()
    // {
    //     $this->refreshDatabase();
    //     $this->seed();

    //     $user = User::firstWhere('email', 'user@gmail.com');

    //     Report::create([
    //         'title' => 'Title',
    //         'description' => 'description',
    //         'attach' => json_encode(array()),
    //         'user_id' => $user->id
    //     ]);

    //     $response = $this->actingAs($user)->get(route('report.index'));

    //     return $response
    //         ->assertSeeText('Title')
    //         ->assertSeeText('description')
    //         ->assertSeeText($user->name);
    // }
}
