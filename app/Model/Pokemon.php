<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model 
{

    protected $table = 'pokemones';
    protected $fillable = [
        'nombre', 'cod', 'tipo','imagen','status',
    ];

}