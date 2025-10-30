<?php

namespace Database\Factories;

use App\Models\Piloto;
use App\Models\Nave;
use App\Models\PilotoNave;
use Illuminate\Database\Eloquent\Factories\Factory;

class PilotoNaveFactory extends Factory
{
    protected $model = PilotoNave::class;

    public function definition()
    {
        $fechaInicio = $this->faker->dateTimeBetween('-2 years', '-1 month');
        
        return [
            'piloto_id' => Piloto::factory(),
            'nave_id' => Nave::factory(),
            'fecha_inicio' => $fechaInicio,
            'fecha_fin' => $this->faker->optional(0.3)->dateTimeBetween($fechaInicio, 'now'),
        ];
    }
}