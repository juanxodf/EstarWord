<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'nave_id',
        'fecha',
        'descripcion',
        'coste'
    ];
    public function nave()
    {
        return $this->belongsTo(Nave::class);
    }
}
