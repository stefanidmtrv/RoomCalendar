<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\StNum;

class StNumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = StNum::class;

    public function definition()
    {
        return [
            
            'stnum'=>$this->faker->numberBetween($min = 1, $max=1000000),
            
            
        ];
    }
}
