<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PilotoNave extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'piloto_id',
        'nave_id',
        'fecha_inicio',
        'fecha_fin'
    ];


    public function piloto()
    {
        return $this->belongsTo(Piloto::class);
    }

    public function nave()
    {
        return $this->belongsTo(Nave::class);
    }

}
