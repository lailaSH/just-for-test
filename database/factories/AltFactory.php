<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AltFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Alt::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
           'slug'=>str::random(10),
        ];
    }
}
