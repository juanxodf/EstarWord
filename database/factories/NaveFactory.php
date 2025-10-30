<?php

namespace Database\Factories;

use App\Models\Nave;
use App\Models\Planeta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nave>
 */
class NaveFactory extends Factory
{
    protected $model = Nave::class;

    public function definition()
    {
        return [
            'planeta_id' => Planeta::factory(),
            'nombre' => $this->faker->unique()->words(2, true),
            'modelo' => $this->faker->word() . '-' . $this->faker->randomNumber(3),
            'tripulacion' => (string) $this->faker->numberBetween(1, 100),
            'pasajeros' => (string) $this->faker->numberBetween(0, 500),
            'clase_nave' => $this->faker->randomElement(['Caza Estelar', 'Transporte', 'Carguero', 'Explorador', 'Destructor', 'Nave de Asalto']),
        ];
    }
}
