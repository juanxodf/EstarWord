<?php

namespace Database\Factories;

use App\Models\Planeta;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlanetaFactory extends Factory
{
    protected $model = Planeta::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->unique()->word(),
            'periodo_rotacion' => $this->faker->numberBetween(10, 100),
            'poblacion' => $this->faker->numberBetween(1000, 1000000000),
            'clima' => $this->faker->randomElement(['Templado', 'Árido', 'Tropical', 'Frío', 'Desértico', 'Húmedo']),
        ];
    }
}