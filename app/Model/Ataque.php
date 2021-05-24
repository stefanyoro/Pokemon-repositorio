<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ataque extends Model 
{

    protected $table = 'ataques';
    protected $fillable = [
        'ataque1', 'ataque2','ataque3','ataque4',
    ];

}