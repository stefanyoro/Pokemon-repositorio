<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Partida extends Model 
{

    protected $table = 'partida';
    protected $fillable = [
        'jugador1', 'jugador2', 'fecha','status',
    ];

}