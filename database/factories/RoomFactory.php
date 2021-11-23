<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'floor_id'=>$this->faker->numberBetween($min = 1, $max=3),
            'table_capacity' => $this->faker->numberBetween($min = 0, $max=30),
            'computer_capacity' => $this->faker->numberBetween($min = 0, $max=30),
            'number_of_projectors' => $this->faker->numberBetween($min = 0, $max=30)
        ];
    }
}
