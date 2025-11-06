<?php

namespace Database\Seeders;

use App\Models\Planeta;
use App\Models\Nave;
use App\Models\Piloto;

use App\Models\Mantenimiento;
use App\Models\PilotoNave;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        // Crear planetas con naves asociadas
        Planeta::factory(5)
            ->has(Nave::factory()
                ->count(3)
                ->has(Mantenimiento::factory()->count(2))
            )
            ->create();

        // Crear pilotos
        $pilotos = Piloto::factory(10)->create();

        // Asignar pilotos aleatoriamente a naves existentes
        $naves = Nave::all();
        foreach ($naves as $nave) {
            $asignados = $pilotos->random(rand(1, 3));
            foreach ($asignados as $piloto) {
                PilotoNave::factory()->create([
                    'nave_id' => $nave->id,
                    'piloto_id' => $piloto->id,
                ]);
            }
        }
    }
}
