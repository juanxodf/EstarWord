<?php

namespace Database\Seeders;

use App\Models\Planeta;
use App\Models\Nave;
use App\Models\Piloto;
use App\Models\Role;
use App\Models\Mantenimiento;
use App\Models\PilotoNave;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        // Crear roles
        $roles = ['admin', 'gestor', 'usuario'];
        foreach ($roles as $rol) {
            Role::firstOrCreate(['nombre' => $rol]);
        }

        // Crear usuarios base
        $admin = User::create([
            'name' => 'Admin Master',
            'email' => 'admin@estarword.com',
            'password' => Hash::make('admin123'),
        ]);
        $admin->roles()->attach(Role::where('nombre', 'admin')->first());

        $gestor = User::create([
            'name' => 'Gestor Base',
            'email' => 'gestor@estarword.com',
            'password' => Hash::make('gestor123'),
        ]);
        $gestor->roles()->attach(Role::where('nombre', 'gestor')->first());

        $usuario = User::create([
            'name' => 'Usuario Normal',
            'email' => 'usuario@estarword.com',
            'password' => Hash::make('usuario123'),
        ]);
        $usuario->roles()->attach(Role::where('nombre', 'usuario')->first());
    }
}

