<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model 
{

    protected $table = 'habilidades';
    protected $fillable = [
        'ps', 'imagen',
    ];

}