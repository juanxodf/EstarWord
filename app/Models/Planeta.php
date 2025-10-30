<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planeta extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'periodo_rotacion',
        'poblacion',
        'clima',
    ];

    public function naves(){
        return $this-> hasMany(Nave::class);
    }
    
}
