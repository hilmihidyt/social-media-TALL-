<?php

namespace Database\Factories;

use App\Models\Timeline\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

class StatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Status::class;

    public function definition()
    {
        return [
            'hash' => \Str::random(32),
            'body' => $this->faker->sentence(),
            'user_id' => rand(1,2)
        ];
    }
}
