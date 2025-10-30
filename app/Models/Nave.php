<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nave extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'modelo',
        'tripulacion',
        'pasajeros',
        'clase_nave'
    ];
    
    public function mantenimientos()
    {
        return $this->hasMany(Mantenimiento::class);
    }
    
    public function pilotos()
    {
        return $this->hasMany(Piloto::class);
    }
}
