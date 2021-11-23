<?php

namespace Database\Factories;

use App\Models\Building;
use Illuminate\Database\Eloquent\Factories\Factory;

class BuildingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Building::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'opening_time' => $this->faker->dateTime(),
            'closing_time' => $this->faker->dateTime(),
            'latitude' => $this->faker->latitude($min = -90, $max = 90),
            'longitude' => $this->faker->longitude($min = -90, $max = 90)
        ];
    }
}
