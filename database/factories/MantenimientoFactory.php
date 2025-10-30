<?php

namespace Database\Factories;

use App\Models\Mantenimiento;
use App\Models\Nave;
use Illuminate\Database\Eloquent\Factories\Factory;

class MantenimientoFactory extends Factory
{
    protected $model = Mantenimiento::class;

    public function definition()
    {
        return [
            'nave_id' => Nave::factory(),
            'fecha' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'descripcion' => $this->faker->sentence(),
        ];
    }
}
