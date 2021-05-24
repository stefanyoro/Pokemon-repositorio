<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Seleccion extends Model 
{

    protected $table = 'seleccion';
    protected $fillable = [
        'Pokemon1', 'Pokemon2','status',
    ];

    public function pokemon()
    {
        return $this->belongsTo(Pokemon::class, 'id_pokemon');
    }

    public function partida()
    {
        return $this->belongsTo(Partida::class, 'id_partida');
    }
}