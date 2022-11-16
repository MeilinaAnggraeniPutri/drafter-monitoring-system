<?php

namespace Modules\Infrastructure\database\factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class InfrastructureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Infrastructure\app\Models\Infrastructure::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /**
         * for title and title slug
         */
        $title = $this->faker->sentence();

        return [
            'title' => $title,
            'slug' => str($title)->slug(),
            'thumbnail' => 'images.jpg',
            'body' => $this->faker->paragraph(5),
            'user_id' => User::firstWhere('email', 'superadmin@gmail.com')->id,
        ];
    }
}
