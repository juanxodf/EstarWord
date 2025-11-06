<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piloto extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'altura',
        'anio_nacimiento',
        'genero'
    ];

    public function naves()
    {
        return $this->belongsToMany(Nave::class, 'piloto_naves')
            ->withPivot('fecha_inicio', 'fecha_fin')
            ->withTimestamps();
    }
}