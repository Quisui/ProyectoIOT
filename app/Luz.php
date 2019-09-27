<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Luz extends Model
{
    //Uso en la bd
    protected $table = 'luces';
    protected $casts = [
        'estado' => 'boolean'
    ];
}



