<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class TruckFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'plate_number' =>'R' . Str::random(2) . rand(100,999) . Str::random(1),
             'vehicle_name' =>$this->faker->name.'truck',
             'driver_name' =>$this->faker->name,
             'driver_phone' =>$this->faker->phoneNumber(),
        ];
    }
}
