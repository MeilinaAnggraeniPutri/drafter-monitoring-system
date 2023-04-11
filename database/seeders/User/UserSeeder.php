<?php

namespace Database\Seeders\User;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'nik' => '20951451',
        ]);

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'nik' => '20951452',

        ]);

        User::factory()->create([
            'name' => 'Test',
            'email' => 'test@gmail.com',
            'nik' => '20951453',
            'validated_at' => null
        ]);

        User::factory()->create([
            'name' => 'Test',
            'email' => 'test1@gmail.com',
            'nik' => '20951454',
            'validated_at' => null
        ]);

        User::factory()->create([
            'name' => 'Test',
            'email' => 'test2@gmail.com',
            'nik' => '20951455',
            'validated_at' => null
        ]);

        User::factory()->create([
            'name' => 'Test',
            'email' => 'test3@gmail.com',
            'nik' => '20951456',
            'validated_at' => null
        ]);
    }
}
