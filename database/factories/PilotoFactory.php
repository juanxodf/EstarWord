<?php

namespace Database\Factories;

use App\Models\Piloto;
use Illuminate\Database\Eloquent\Factories\Factory;

class PilotoFactory extends Factory
{
    protected $model = Piloto::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'altura' => (string) $this->faker->numberBetween(150, 200),
            'anio_nacimiento' => $this->faker->year(),
            'genero' => $this->faker->randomElement(['Masculino', 'Femenino', 'Otro']),
        ];
    }
}
