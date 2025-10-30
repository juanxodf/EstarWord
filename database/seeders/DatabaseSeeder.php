<?php

namespace Database\Seeders;

use App\Models\Nave;
use App\Models\Piloto;
use App\Models\Planeta;
use App\Models\Mantenimiento;
use App\Models\PilotoNave;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Planeta::factory(10)->create();
        Piloto::factory(10)->create();

        Nave::factory(10)->create();
        Mantenimiento::factory(10)->create();

        PilotoNave::factory(20)->create();
    }
}
