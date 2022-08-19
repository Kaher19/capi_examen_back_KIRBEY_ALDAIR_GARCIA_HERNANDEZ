<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'domicilio'=>$this->faker->streetAddress(),
            'numero_exterior'=>$this->faker->randomNumber(3),
            'colonia'=>$this->faker->name(),
            'cp'=>$this->faker->postcode(),
            'ciudad'=>$this->faker->city(),
            'fecha_nacimiento'=> $this->faker->dateTimeBetween('-30 years','-5 years'),
            'created_at'=> now()
        ];
    }
}
